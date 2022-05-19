<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $statusSelected = in_array($request->get('status'), ['publish', 'draft']) ? $request->get('status') : "publish";
        $products = $statusSelected == "publish" ? Product::publish() : Product::draft();
        if ($request->get('keyword')) {
            $products->search($request->get('keyword'));
        }
        return view('products.index', [
            'products' => $products->paginate(2)->withQueryString(),
            'statuses' => $this->statuses(),
            'statusSelected' => $statusSelected
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', ['statuses' => $this->statuses()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:60',
                'slug' => 'required|string|unique:products,slug',
                'thumbnail' => 'required',
                'description' => 'required|string|max:240',
                'price' => 'required|string|max:30',
                'status' => 'required'
            ],
            [],
            $this->attributes()
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $product = Product::create([
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => parse_url($request->thumbnail)['path'],
                "description" => $request->description,
                "price" => $request->price,
                "status" => $request->status,
                "user_id" => Auth::user()->id,
            ]);

            Alert::success(
                'Add product',
                'Product saved successfully'
            );
            return redirect()->route('products.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Add product',
                'An error occurred while saving the product'
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'statuses' => $this->statuses(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:60',
                'slug' => 'required|string|unique:products,slug,' . $product->id,
                'thumbnail' => 'required',
                'description' => 'required|string|max:240',
                'price' => 'required|string|max:30',
                'status' => 'required'
            ],
            [],
            $this->attributes()
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $product->update([
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => parse_url($request->thumbnail)['path'],
                "description" => $request->description,
                "price" => $request->price,
                "status" => $request->status,
                "user_id" => Auth::user()->id,
            ]);

            Alert::success(
                'Edit product',
                'Product updated successfully'
            );
            return redirect()->route('products.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Edit product',
                'An error occurred while updating the product'
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            $product->delete();

            Alert::success(
                'Delete product',
                'Product deleted successfully'
            );
            return redirect()->route('products.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Delete product',
                'An error occurred while deleting the product'
            );
        } finally {
            DB::commit();
            return redirect()->back();
        }
    }

    private function statuses()
    {
        return [
            'draft' => 'Draft',
            'publish' => 'Publish',
        ];
    }

    private function attributes()
    {
        return [
            'title' => 'title',
            'slug' => 'slug',
            'thumbnail' => 'thumbnail',
            'description' => 'description',
            'price' => 'price',
            'status' => 'status',
        ];
    }
}

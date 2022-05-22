<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $statusSelected = in_array($request->get('status'), ['publish', 'draft']) ? $request->get('status') : "publish";
        $posts = $statusSelected == "publish" ? Post::publish() : Post::draft();
        if ($request->get('keyword')) {
            $posts->search($request->get('keyword'));
        }
        return view('posts.index', [
            'posts' => $posts->paginate()->withQueryString(),
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
        return view('posts.create', ['statuses' => $this->statuses()]);
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
                'slug' => 'required|string|unique:posts,slug',
                'thumbnail' => 'required',
                'description' => 'required|string|max:240',
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
            $post = Post::create([
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => parse_url($request->thumbnail)['path'],
                "description" => $request->description,
                "status" => $request->status,
                "user_id" => Auth::user()->id,
            ]);

            Alert::success(
                'Add post',
                'Post saved successfully'
            );
            return redirect()->route('posts.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Add post',
                'An error occurred while saving the post'
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
            'statuses' => $this->statuses(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:60',
                'slug' => 'required|string|unique:posts,slug,' . $post->id,
                'thumbnail' => 'required',
                'description' => 'required|string|max:240',
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
            $post->update([
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => parse_url($request->thumbnail)['path'],
                "description" => $request->description,
                "status" => $request->status,
                "user_id" => Auth::user()->id,
            ]);

            Alert::success(
                'Edit post',
                'Post updated successfully'
            );
            return redirect()->route('posts.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Edit post',
                'An error occurred while updating the post'
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        DB::beginTransaction();
        try {
            $post->delete();

            Alert::success(
                'Delete post',
                'Post deleted successfully'
            );
            return redirect()->route('posts.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                'Delete post',
                'An error occurred while deleting the post'
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
            'status' => 'status',
        ];
    }
}

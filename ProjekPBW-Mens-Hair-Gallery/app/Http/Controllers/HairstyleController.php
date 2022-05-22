<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;

class HairstyleController extends Controller
{
    public function hairstyle()
    {
        return view('blog.hairstyle', [
            'posts' => Post::publish()->latest()->paginate()
        ]);
    }

    public function product()
    {
        return view('blog.product', [
            'products' => Product::publish()->latest()->paginate()
        ]);
    }

    public function home()
    {
        return view('blog.home', [
            'posts' => Post::publish()->latest()->paginate(2),
            'products' => Product::publish()->latest()->paginate(2)
        ]);
    }

    public function rekomendasi()
    {
        return view('blog.rekomendasi');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HairstyleController extends Controller
{
    public function hairstyle()
    {
        return view('blog.hairstyle', [
            'posts' => Post::publish()->latest()->paginate()
        ]);
    }
}

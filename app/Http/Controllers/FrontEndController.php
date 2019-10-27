<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->get();
        $categories = Post::where('status', 1)->get();
        return view('index', compact(['posts', 'categories']));
    }

    public function single_post($id)
    {
        $post = Post::find($id);
        return view('single-post', compact('post'));
    }

    public function category_post($id)
    {
        $category = Category::find($id);
        return view('category')->with(['category'=> $category, 'id' => $id]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.posts.add-post')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'image' => 'nullable|image'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            $post->image = $request->image->store('public/posts');
        }
        $post->save();

        Session::flash('message', 'Post published successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post');
    }

    public function manage()
    {
        $posts = Post::all();
        return view('admin.posts.post-manage')->with('posts', $posts);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::where('status', 1)->get();
        return view('admin.posts.post-edit')->with(['post' => $post, 'categories' => $categories]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'image' => 'nullable|image'
        ]);

        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('public/posts');
        }
        $post->save();

        Session::flash('message', 'Post updated successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post.manage');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        Session::flash('message', 'Post deleted successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post.manage');
    }
}

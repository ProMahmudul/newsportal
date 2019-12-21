<?php

namespace App\Http\Controllers;

use App\Category;
use App\LocalPost;
use App\Post;
use App\District;
use App\Division;
use App\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'nullable|image',
            'category' => 'required|not_in:0',
            'is_featured' => 'nullable|boolean'
        ],
            [
                'category.required' => 'You didn\'t choose any category',
                'category.not_in' => 'You didn\'t choose any category'
            ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        if ($request->is_featured) {
            $post->is_featured = $request->is_featured;
        } else {
            $post->is_featured = 0;
        }

        if ($request->hasFile('image')) {
            $post->image = $request->image->store('public/posts');
        }
        $post->save();

        $lastInsertedId = $post->id;

        if ($request->divisions) {
            $local_post = new LocalPost();
            if ($request->districts) {
                if ($request->upazilas) {
                    $local_post->post_id = $lastInsertedId;
                    $local_post->division_id = $request->divisions;
                    $local_post->district_id = $request->districts;
                    $local_post->upazila_id = $request->upazilas;
                    $local_post->save();
                }
                $local_post->post_id = $lastInsertedId;
                $local_post->division_id = $request->divisions;
                $local_post->district_id = $request->districts;
                $local_post->save();
            }

            $local_post->post_id = $lastInsertedId;
            $local_post->division_id = $request->divisions;
            $local_post->save();
        }

        Session::flash('message', 'Post published successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post');
    }

    public function manage()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
//        dd($posts);
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
            'image' => 'nullable|image',
            'category' => 'required|not_in:0',
        ],
            [
                'category.required' => 'You didn\'t choose any category',
                'category.not_in' => 'You didn\'t choose any category'
            ]);

        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        if ($request->is_featured) {
            $post->is_featured = $request->is_featured;
        } else {
            $post->is_featured = 0;
        }

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('public/posts');
        }
        $post->save();

        if ($request->divisions) {
            $local_post = LocalPost::where('post_id', $request->id)->first();
            if (!empty($request->divisions) && empty($request->districts) && empty($request->upazilas)) {
                $local_post->division_id = $request->divisions;
                $local_post->district_id = null;
                $local_post->upazila_id = null;
                $local_post->save();
            } elseif (!empty($request->divisions) && !empty($request->districts) && empty($request->upazilas)) {
                $local_post->division_id = $request->divisions;
                $local_post->district_id = $request->districts;
                $local_post->upazila_id = null;
                $local_post->save();
            } elseif (!empty($request->divisions) && !empty($request->districts) && !empty($request->upazilas)) {
                $local_post->division_id = $request->divisions;
                $local_post->district_id = $request->districts;
                $local_post->upazila_id = $request->upazilas;
                $local_post->save();
            }
        }

        Session::flash('message', 'Post updated successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post.manage');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        if (Storage::exists($post->image)) {
            Storage::delete($post->image);
        }
        $post->delete();

        if ($post->local_post) {
            $post->local_post->delete();
        }

        Session::flash('message', 'Post deleted successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('post.manage');
    }

    public function divisions($id)
    {
        $divisions = Division::where('country_id', $id)->get();
        return response()->json($divisions);
    }

    public function districts($id)
    {
        $districts = District::where('division_id', $id)->get();
        return response()->json($districts);
    }

    public function upazilas($id)
    {
        $upazilas = Upazila::where('district_id', $id)->get();
        return response()->json($upazilas);
    }
}

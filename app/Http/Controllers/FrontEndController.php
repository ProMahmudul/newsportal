<?php

namespace App\Http\Controllers;

use App\Category;
use App\Division;
use App\District;
use App\Upazila;
use App\LocalPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class FrontEndController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $divisions = Division::all();
        return view('index', compact(['posts', 'categories', 'divisions']));
    }

    public function single_post($id)
    {
        $post = Post::find($id);
        $categories = Category::where('status', 1)->get();
        return view('single-post', compact(['post', 'categories']));
    }

    public function category_post($id)
    {
        $category = Category::find($id);
        $categories = Category::where('status', 1)->get();
        return view('category')->with(['category' => $category, 'id' => $id, 'categories' => $categories]);
    }


    public function getDistrict()
    {
        return view('admin.posts.district-post');
    }

    public function posts_search(Request $request)
    {
        $divisions = $request->divisions;
        $districts = $request->districts;
        $upazilas = $request->upazilas;
        $categories = Category::where('status', 1)->get();

        if ($divisions && $districts && $upazilas) {
            $local_posts = LocalPost::where('upazila_id', $upazilas)->get();
            if ($local_posts->isEmpty()){
                Session::flash('message', 'No news available in this area.');
                Session::flash('alert_type', 'alert-danger');
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            } else {
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            }
        } elseif ($divisions && $districts) {
            $local_posts = LocalPost::where('district_id', $districts)->get();
            if ($local_posts->isEmpty()){
                Session::flash('message', 'No news available in this area.');
                Session::flash('alert_type', 'alert-danger');
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            } else {
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            }
        } elseif ($divisions) {
            $local_posts = LocalPost::where('division_id', $divisions)->get();
            if ($local_posts->isEmpty()){
                Session::flash('message', 'No news available in this area.');
                Session::flash('alert_type', 'alert-danger');
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            } else {
                return view('bangladesh-search', compact(['local_posts', 'categories']));
            }
        }

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

<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Pack;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $packs = Pack::where('post_category','sale off')->get();
        $posts = Post::all();
        $proPacks = Pack::all();
        $trainer = Post::where('post_experience','5')->get();
        $comment = Contact::where('post_view','1')->get();

        // $proPacks = Pack::where('post_category','pro')->get();
        return  view("front.index", compact('posts','packs','proPacks','trainer','comment'));
    }
    public function search()
    {
        $search_text = $_GET['search'];
        $productcategory = Blog::where('post_content','LIKE','%'.$search_text.'%')->get();


        return view("front.search",compact('productcategory'));
    }
    //fat
    public function fat3(){
        return view('front.Fat3');
    }
    public function fat2(){
        return view('front.Fat2');
    }
    public function fat1(){
        return view('front.Fat1');
    }
    //thin
    public function thin1(){
        return view('front.Thin1');
    }
    public function thin2(){
        return view('front.Thin2');
    }
    public function thin3(){
        return view('front.Thin3');
    }
}

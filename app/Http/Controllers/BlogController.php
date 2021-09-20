<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return  view("front.blog", compact('blogs'));
    }
    // blog-category
    public function blog1(){
        $blogs = Blog::where('post_category','Phòng tập')->get();
        return  view("front.blog1", compact('blogs'));
    }
    public function blog3(){
        $blogs = Blog::where('post_category','Fitness')->get();
        return  view("front.blog3", compact('blogs'));
    }
    public function blog4(){
        $blogs = Blog::where('post_category','Béo phì')->get();
        return  view("front.blog4", compact('blogs'));
    }
    public function blog5(){
        $blogs = Blog::where('post_category','Dinh dưỡng')->get();
        return  view("front.blog5", compact('blogs'));
    }
    public function blog6(){
        $blogs = Blog::where('post_category','Tiểu đường')->get();
        return  view("front.blog6", compact('blogs'));
    }

    public function listblog(){
        $blogs = Blog::all();
        return  view("front.Admin.listBlog", compact('blogs'));
    }
    
    public function addblog(){
        return view('front.Admin.addBlog');
    }
    public function create(){
        return view('front.Admin.addBlog');
    }
    public function store(Request $request){
        try{
            $request->validate([
                "post_title" => 'required',
                "post_image" =>'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
                "post_content" =>'required',
            ]);
                $input = $request->all();
                if($request->hasFile('post_image'))
                {
                   $destination_path = 'public/images/blog';
                   $image = $request->file('post_image');
                   $image_name = $image->getClientOriginalName();
                   $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                   $input['post_image'] = $image_name;
                }
            Blog::create($input);
            return redirect()->route('post.blog')->with('success', 'Bạn đã thêm bài viết thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thêm Bài viết thất bại: bạn cần nhập đủ thông tin!');
        }
    }
    public function delete($id){
        Blog::find($id)->delete();
        return redirect()->route('post.blog')->with('success', 'Bạn đã xóa bài viết thành công!');
    }
    public function editBlog($id) {
        $post = DB::table('tbl_blog')->find($id);
        return view('front.Admin.edit_blog',compact('post'));
    }

    public function updateBlog(Request $request, $id)
    {
        try{
            $post = Blog::find($id);
            $post->post_title = $request->post_title;
            $post->post_category = $request->post_category;
    
            $post->post_content = $request->post_content;
            $post->post_link = $request->post_link;
    
            $post->post_image = $request->post_image;
               if($request->hasFile('post_image'))
               {
                $destination_path = 'public/images/blog';
                $image = $request->file('post_image');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                $post['post_image'] = $image_name;
               }
               $post->save();
            return redirect()->route('post.blog')->with('success', 'Cập nhật bài viết thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Cập nhật bài viết thất bại, vui lòng nhập đủ thông tin!');
        }
    }
}

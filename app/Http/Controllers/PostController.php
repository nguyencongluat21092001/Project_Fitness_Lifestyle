<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostCreateRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return  view("front.Admin.dashboard_manager", compact('posts'));
    }
    public function create(){
        return view("front.Admin.dashboard");
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                "post_name" => 'required',
                "post_age" =>'required',
                "post_image" =>'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
            ]);
                $input = $request->all();
                if($request->hasFile('post_image'))
                {
                   $destination_path = 'public/images/traine';
                   $image = $request->file('post_image');
                   $image_name = $image->getClientOriginalName();
                   $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                   $input['post_image'] = $image_name;
                }
                Post::create($input);
                return redirect()->route('post.index')->with('success', 'Bạn đã thêm thành công!');
            }catch(\Exception $ex){
                return back()->with('message', 'Thêm huấn luyện viên thất bại: bạn cần nhập đủ thông tin!');
            }

    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect()->route('post.index')->with('success', 'Bạn đã xóa huấn luyện viên thành công!');
    }
    public function editTrainer($id) {
        $post = DB::table('tbl_posts')->find($id);
        return view('front.Admin.edit_trainer',compact('post'));
    }

    public function updateTrainer(Request $request, $id)
    {
        try{
            $post = Post::find($id);
            $post->post_name = $request->post_name;
            $post->post_age = $request->post_age;

            $post->post_introduce = $request->post_introduce;
            $post->post_experience = $request->post_experience;

            $post->post_image = $request->post_image;
            if($request->hasFile('post_image'))
            {
                $destination_path = 'public/images/traine';
                $image = $request->file('post_image');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                $post['post_image'] = $image_name;
            }
            $post->save();
            return redirect()->route('post.index')->with('success', 'Bạn đã thay đổi thành công!');

        }catch(\Exception $ex){
            return back()->with('message', 'Thay đổi huấn luyện viên thất bại: bạn cần nhập đủ thông tin!');
        }
    }
}

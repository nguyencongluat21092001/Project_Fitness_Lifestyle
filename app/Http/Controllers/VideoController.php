<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function listvideo(){
        $video = Video::all();
        return view('front.Admin.listvideo',compact('video'));
    }
    public function videogiamcan(){
        $videos = Video::where('post_category','Giảm cân')->get();
        return view('front.weightloss',compact('videos'));
    }
    public function videotangco(){
        $video = Video::where('post_category','Tăng cơ')->get();
        return view('front.musclegain',compact('video'));
    }
    public function addvideo(){
        return view('front.Admin.addVideo');
    }
    public function create(){
        return view('front.Admin.addVieo');
    }
    public function store(Request $request){
        try{
            $request->validate([
                "post_title" => 'required',
                "post_content" =>'required',
                "post_link" =>'required',
            ]);
                $input = $request->all();
                if($request->hasFile('post_image'))
                {
                   $destination_path = 'public/images/video';
                   $image = $request->file('post_image');
                   $image_name = $image->getClientOriginalName();
                   $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                   $input['post_image'] = $image_name;
                }
            Video::create($input);
            
            return redirect()->route('post.video')->with('success', 'Bạn đã thêm video thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thêm video thất bại: bạn cần nhập đủ thông tin!');
        }
    }
    public function delete($id){
        Video::find($id)->delete();
        return redirect()->route('post.video')->with('success', 'Bạn đã xóa video thành công!');
    }
    public function editVideo($id) {
        $post = DB::table('tbl_videos')->find($id);
        return view('front.Admin.edit_video',compact('post'));
    }

    public function updateVideo(Request $request, $id)
    {
        try{
            $post = Video::find($id);
            $post->post_title = $request->post_title;
            $post->post_category = $request->post_category;
    
            $post->post_content = $request->post_content;
            $post->post_link = $request->post_link;
    
            $post->post_image = $request->post_image;
               if($request->hasFile('post_image'))
               {
                $destination_path = 'public/images/video';
                $image = $request->file('post_image');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                $post['post_image'] = $image_name;
               }
               $post->save();
            return redirect()->route('post.video')->with('success', 'Cập nhật video thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Cập nhật video thất bại!: bạn cần nhập đủ thông tin!');
        }
    }
}

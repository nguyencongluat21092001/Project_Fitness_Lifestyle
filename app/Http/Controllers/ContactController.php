<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactCreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function listcontact(){
        $contacts = Contact::all();
        return  view("front.Admin.listContact", compact('contacts'));
    }
    public function addcontact(){
        return view("front.contact");
    }
    public function create(){
        return view("front.contact");
    }
    public function store(ContactCreateRequest $contactCreateRequest){
        try{
            Contact::create([
                "post_name"=>$contactCreateRequest->post_name,
                "post_age"=>$contactCreateRequest->post_age,
                "post_adress"=>$contactCreateRequest->post_adress,
                "post_phone"=>$contactCreateRequest->post_phone,
                "post_comment"=>$contactCreateRequest->post_comment,
                "post_repcomment"=>$contactCreateRequest->post_repcomment,
                "post_view"=>$contactCreateRequest->post_view,
                "created_at"=>$contactCreateRequest->created_at,
            ]);
            return back()->with('success', 'Đã gửi phản hồi cho quản trị viên!');
        }catch(\Exception $ex){
            return back()->with('message', 'chưa thể gửi phản hồi cho quản trị viên!');
        }
    }
    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->route('post.contact')->with('success', 'Xóa phản hồi thành công!');
    }
    public function editContact($id) {
        $post = DB::table('tbl_contact')->find($id);
        return view('front.Admin.edit_contact',compact('post'));
    }

    public function updateContact(Request $request, $id)
    {
        try{
            $post = Contact::find($id);
            $post->post_name = $request->post_name;
            $post->post_age = $request->post_age;

            $post->post_adress = $request->post_adress;
            $post->post_phone = $request->post_phone;

            $post->post_comment = $request->post_comment;
            $post->post_repcomment = $request->post_repcomment;
            $post->post_view = $request->post_view;

            $post->save();
            return redirect()->route('post.contact')->with('success', 'Thay đổi đối thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thay đổi thất bại: bạn cần nhập đủ thông tin!');
        }

    }
}

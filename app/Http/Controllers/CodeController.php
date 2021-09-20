<?php

namespace App\Http\Controllers;
use App\Http\Requests\CodeCreateRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Code;

use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function create(){
        return view('front.Admin.addCode');
    }
    public function store(CodeCreateRequest $codeCreateRequest){
        try{
            Code::create([
                "post_name"=>$codeCreateRequest->post_name,
                "post_code"=>$codeCreateRequest->post_code,
                "post_sale"=>$codeCreateRequest->post_sale,
                "post_dayend"=>$codeCreateRequest->post_dayend,

            ]);
            return redirect()->route('post.code')->with('success', 'Bạn đã thêm mã giảm giá thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thêm mã giảm giá thất bại: bạn cần nhập đủ thông tin!');
        }

    }
    public function delete($id){
        Code::find($id)->delete();
        return redirect()->route('post.code')->with('success', 'Bạn đã xóa mã giảm giá thành công!');
    }
    public function editCode($id) {
        $post = DB::table('tbl_discountcode')->find($id);
        return view('front.Admin.edit_codesale',compact('post'));
    }

    public function updateCode(Request $request, $id)
    {
        try{
            $post = Code::find($id);
            $post->post_name = $request->post_name;
            $post->post_code = $request->post_code;

            $post->post_sale = $request->post_sale;
            $post->post_dayend = $request->post_dayend;

            $post->save();
            return redirect()->route('post.code')->with('success', 'Cập nhật mã giảm giá thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Cập nhật mã giảm giá thất bại: bạn cần nhập đủ thông tin!');
        }
    }
}

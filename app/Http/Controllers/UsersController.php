<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersCreateRequest;
use App\Models\Users;
use App\Models\RouterTraining;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    // public function register(){
    //     return view('front.Admin.registerUsers');
    // }


    public function login(){
        return view('front.loginUsers');
    }

    public function index(Request $request ){
        $post_email = $request->post_email;
        $post_password = $request->post_password;
        $result = DB::table('tbl_users')->where('post_email',$post_email)->where('post_password',$post_password)->first();

        if($result){
           Session::put('post_name',$result->post_name);
           Session::put('id',$result->id);
           $codes = Code::all();
           $data = RouterTraining::where('user_id',$result->id)->get();
           return view('front.usersdiscountcode',compact('codes','data'));
        }else{
           Session::put('message',"Tài khoản hoặc mật khẩu đăng nhập không chính xác!");
           return Redirect::to('loginusers');
        }
     }
     public function logout(){
        Session::put('post_name',null);
        Session::put('id',null);

        return Redirect::to('loginusers');
     }
     public function create(){
        return view('front.registerUsers');
     }
     public function store(UsersCreateRequest $usersCreateRequest){
        try{
          Users::create([
            "post_name"=>$usersCreateRequest->post_name,
            "post_phone"=>$usersCreateRequest->post_phone,
            "post_email"=>$usersCreateRequest->post_email,
            "post_password"=>$usersCreateRequest->post_password,
            "post_repeatpassword"=>$usersCreateRequest->post_repeatpassword,

          ]);
          Session::put('message',"Tạo tài khoản thành công!");
          return redirect()->route('');
        }catch(\Exception $ex){
           return back();
        }
     }
     public function delete($id){
        Users::find($id)->delete();
        return redirect()->route('post.user');
    }
    // public function test($id){
    //     $data = RouterTraining::where('user_id',$id)->get();
    //     // dd($data);
    //     return view('front.RouterTraining', compact('data'));
    // }
}

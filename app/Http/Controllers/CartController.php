<?php

namespace App\Http\Controllers;
use App\Models\Pack;
use App\Models\Cart;
use App\Models\Code;
use App\Models\Video;
use App\Http\Requests\CartCreateRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function pack(){
        $packs = Pack::all();
        return view('front.cart',compact('packs'));
    } public function history(){
        $history = Cart::all();
        return view('front.history',compact('history'));
    }
    public function cart($id) {
        $post = DB::table('tbl_packs')->find($id);
        $codes = Code::all();
        return view('front.cart',compact('post','codes'));
    }
    public function index(){
        $addcart = Cart::all();
        $sum = Cart::all()->sum('post_price');
        return view('front.Admin.listCart',compact('addcart','sum'));
    }
    public function code(){
        $codes = Code::all();
        return view('front.Admin.listCodesale',compact('codes'));
    }
    public function create(){
        return view('front.cart');
    }
    public function store(CartCreateRequest $cartCreateRequest){
        try{
            Cart::create([
               "post_category"=>$cartCreateRequest->post_category,
               "post_price"=>$cartCreateRequest->post_price,
               "post_month"=>$cartCreateRequest->post_month,
               "post_cardio"=>$cartCreateRequest->post_cardio,
               "post_swimming"=>$cartCreateRequest->post_swimming,
               "post_yoga"=>$cartCreateRequest->post_yoga,
               "post_zumba"=>$cartCreateRequest->post_zumba,
               "post_massage"=>$cartCreateRequest->post_massage,
               "post_boxing"=>$cartCreateRequest->post_boxing,
               "post_name"=>$cartCreateRequest->post_name,
               "post_email"=>$cartCreateRequest->post_email,
               "post_phone"=>$cartCreateRequest->post_phone,
               "post_adress"=>$cartCreateRequest->post_adress,
               "post_discountcode"=>$cartCreateRequest->post_discountcode,
            ]);
            echo '<script>alert("Bạn đã mua kế hoạch thành công!");</script>';
            return redirect()->route('post.history');
        }catch(\Exception $ex){
            echo '<script language="javascript">alert("bạn phải nhập đầy đủ thông tin!");</script>';
            return back();


        }

    }
    public function delete($id){
        Cart::find($id)->delete();
        return redirect()->route('post.cart')->with('success', 'Bạn đã xóa người dùng đăng ký tài khoản thành công!');
    }
    public function giamgia(){
        $codes = Code::all();
        $packs = Pack::all();
        $video = Video::where('post_category','Tăng cơ')->get();
        return view('front.usersdiscountcode', compact('codes','packs','video'));
    }
}

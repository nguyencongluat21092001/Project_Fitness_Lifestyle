<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PackCreateRequest;
use App\Models\Pack;
use App\Models\PackCategory;
use Illuminate\Http\Request;


class PricingController extends Controller
{
    public function pricing(){
        $packs = Pack::all();
        return  view("front.pricing", compact('packs'));
    }
    public function BMR(){
        $packs = Pack::all();
        return  view("front.BMR", compact('packs'));
    }
    public function BMI(){
        return  view("front.BMI");
    }
    public function index(){
        $packs = Pack::all();
        // $sum = Pack::all()->sum('post_price');
        // dd($sum);
        return view('front.Admin.listPricing',compact('packs','sum'));

    }
    public function pack(){
        $packs = Pack::all();
        return view('front.cart',compact('packs'));
    }
    public function create(){
        $catePack = PackCategory::all();
        return view('front.Admin.addPricing',compact('catePack'));
    }
    public function store(PackCreateRequest $packCreateRequest){
        try{
            Pack::create([
                "post_category_id"=>$packCreateRequest->post_category_id,
                "post_price"=>$packCreateRequest->post_price,
                "post_month"=>$packCreateRequest->post_month,
                "post_cardio"=>$packCreateRequest->post_cardio,
                "post_swimming"=>$packCreateRequest->post_swimming,
                "post_yoga"=>$packCreateRequest->post_yoga,
                "post_zumba"=>$packCreateRequest->post_zumba,
                "post_massage"=>$packCreateRequest->post_massage,
                "post_boxing"=>$packCreateRequest->post_boxing,
            ]);
            return redirect()->route('post.pack')->with('success', 'Bạn đã thêm kế hoạch thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thêm huấn luyện viên thất bại: bạn cần nhập đủ thông tin!');
        }

    }
    public function delete($id){
        Pack::find($id)->delete();
        return redirect()->route('post.pack')->with('success', 'Bạn đã xóa kế hoạch thành công!');
    }
    public function editPricing($id) {
        $post = DB::table('tbl_packs')->find($id);
        return view('front.Admin.edit_pricing',compact('post'));
    }

    public function updatePricing(Request $request, $id)
    {
        try{
            $post = Pack::find($id);
            $post->post_category_id = $request->post_category_id;
            $post->post_price = $request->post_price;

            $post->post_month = $request->post_month;
            $post->post_cardio = $request->post_cardio;

            $post->post_swimming = $request->post_swimming;
            $post->post_yoga = $request->post_yoga;
            $post->post_zumba = $request->post_zumba;
            $post->post_massage = $request->post_massage;

            $post->post_boxing = $request->post_boxing;

            $post->save();
            return redirect()->route('post.pack')->with('success', 'Thay đổi kế hoạch thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thay đổi kế hoạch thất bại: bạn cần nhập đủ thông tin!');
        }

    }




    //PackCategory
    public function deletecatepack($id){
        PackCategory::find($id)->delete();
        return redirect()->route('post.catepack')->with('success', 'Bạn đã xóa thể loại thành công!');
    }
    public function listpackcate(){
        $catePack = PackCategory::all();
        return view('front.Admin.listPackCategory',compact('catePack'));
    }
    public function addcatepack(){
        return view('front.Admin.addCategoryPack');
    }
    public function addcatepacks(Request $request){
        try{
            $request->validate([
                "name" =>'required',
            ]);
            $input = $request->all();
            PackCategory::create($input);
            return redirect()->route('post.catepack')->with('success', 'Bạn đã thêm thể loại thành công!');
        }
        catch(\Exception $ex){
             return back()->with('message', 'Thêm thể loại thất bại: bạn cần nhập đủ thông tin!');
        };
    }
    public function editcatepack($id){
       $packcate = DB::table('packcategory')->find($id);
       return view('front.Admin.edit_catepack',compact('packcate'));
    }
    public function updatecatepack(Request $request, $id){
        try{
            $post = PackCategory::find($id);
            $post->name = $request->name;
            $post->save();
            return redirect()->route('post.catepack')->with('success', 'Thay đổi kế hoạch thành công!');
        }catch(\Exception $ex){
            return back()->with('message', 'Thay đổi kế hoạch thất bại: bạn cần nhập đủ thông tin!');
        }
    }


}

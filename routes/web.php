<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    return view('front.blog');
});
Route::get('/gallery', function () {
    return view('front.gallery');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/pricing', function () {
    return view('front.pricing');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard-product', function () {
    return view('front.Admin.dashboard');
});



// dashboard-add huấn luyện viên
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/post',[PostController::class,'create'])->name('post.create');
Route::post('store',[PostController::class,'store'])->name('store.post');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard_manager', [PostController::class,'index'])->name('post.index');
Route::get('/trang-chu', [HomeController::class,'index']);
Route::get('/trainer', [TrainerController::class,'trainer']);
Route::get('/deletetrainer/{id}',[PostController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('editTrainer/{id}',[PostController::class,'editTrainer'])->name('editTrainer');
    //Route::get('editTrainer/{id}',[PostController::class,'editTrainer'])->name('editTrainer');
Route::post('updateTrainer/{id}', [PostController::class,'updateTrainer'])->name('updateTrainer');




// dashboard-các gói tập
Route::middleware(['auth:sanctum', 'verified'])->get('/addPricing',[PricingController::class,'create']);
Route::post('storepack',[PricingController::class,'store'])->name('store.pack');
Route::middleware(['auth:sanctum', 'verified'])->get('/listPricing',[PricingController::class,'index'])->name('post.pack');
Route::get('/pricing', [PricingController::class,'pricing']);
Route::get('/deletepricing/{id}',[PricingController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/editPricing/{id}',[PricingController::class,'editPricing'])->name('editPricing');
    //Route::get('/editPricing/{id}',[PricingController::class,'editPricing'])->name('editPricing');
Route::post('updatePricing/{id}',[PricingController::class,'updatePricing'])->name('updatePricing');



//packcategory
Route::get('listpackcategory',[PricingController::class,'listpackcate'])->name('post.catepack');
Route::get('/deletecatepack/{id}',[PricingController::class,'deletecatepack']);
Route::get('addcatepack',[PricingController::class,'addcatepack']);
Route::post('addcatepacks',[PricingController::class,'addcatepacks'])->name('store.addcatepack');
Route::get('/editcatepack/{id}',[PricingController::class,'editcatepack'])->name('editcatepack');
Route::post('updatecatepack/{id}',[PricingController::class,'updatecatepack'])->name('updatecatepack');


Route::get('/BMR',[PricingController::class,'BMR']);//BMR
Route::get('/BMI',[PricingController::class,'BMI']);//BMR
Route::get('/Fat3',[HomeController::class,'fat3']);//fat3
Route::get('/Fat2',[HomeController::class,'fat2']);//fat2
Route::get('/Fat1',[HomeController::class,'fat1']);//fat1
Route::get('/Thin1',[HomeController::class,'thin1']);//thin1
Route::get('/Thin2',[HomeController::class,'thin2']);//thin2
Route::get('/Thin3',[HomeController::class,'thin3']);//thin3




// dashboard-blog
Route::middleware(['auth:sanctum', 'verified'])->get('/addBlog',[BlogController::class,'addblog']);
    //Route::get('/addBlog',[BlogController::class,'addblog']);
Route::post('/storeblog',[BlogController::class,'store'])->name('store.blog');
Route::middleware(['auth:sanctum', 'verified'])->get('/listBlog',[BlogController::class,'listblog'])->name('post.blog');
    //Route::get('/listBlog',[BlogController::class,'listblog'])->name('post.blog');
Route::get('/blog', [BlogController::class,'blog']);
Route::get('/blogindex', [BlogController::class,'blogindex']);
Route::get('/deleteblog/{id}',[BlogController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/editBlog/{id}',[BlogController::class,'editBlog'])->name('editBlog');
    //Route::get('/editBlog/{id}',[BlogController::class,'editBlog'])->name('editBlog');
Route::post('updateBlog/{id}',[BlogController::class,'updateBlog'])->name('updateBlog');




//add-Category_blog
Route::middleware(['auth:sanctum', 'verified'])->get('/listCategory',[BlogController::class,'listcategory'])->name('list.category');
Route::get('/addcate', [BlogController::class,'createcategory']);
Route::post('/addcategory', [BlogController::class,'addcategory'])->name('add.category');
Route::get('/deletecate/{id}',[BlogController::class,'deletecate']);






//dashboard-contact
Route::get('/addcontact',[ContactController::class,'addcontact']);
Route::post('/storecontact',[ContactController::class,'store'])->name('store.contact');
Route::get('/listContact',[ContactController::class,'listcontact'])->name('post.contact');
Route::get('/deletecontact/{id}',[ContactController::class,'delete']);



Route::middleware(['auth:sanctum', 'verified'])->get('/editContact/{id}',[ContactController::class,'editContact'])->name('editContact');
Route::post('updateContact/{id}',[ContactController::class,'updateContact'])->name('updateContact');


//search
Route::get('/search', [HomeController::class,'search']);


//  cart
Route::get('/allpacks', [PricingController::class,'pack']);
Route::get('/cart/{id}',[CartController::class,'cart'])->name('cart');
Route::get('/addCart',[CartController::class,'create']);
Route::post('storecart',[CartController::class,'store'])->name('store.cart');
Route::middleware(['auth:sanctum', 'verified'])->get('/listCart',[CartController::class,'index'])->name('post.cart');
Route::get('/history',[CartController::class,'history'])->name('post.history');
Route::get('/deletecart/{id}',[CartController::class,'delete']);



//video
Route::middleware(['auth:sanctum', 'verified'])->get('/addVideo',[VideoController::class,'addvideo']);
Route::post('/storevideo',[VideoController::class,'store'])->name('store.video');
Route::middleware(['auth:sanctum', 'verified'])->get('/listVideo',[VideoController::class,'listvideo'])->name('post.video');
Route::get('/deletevideo/{id}',[VideoController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/editVideo/{id}',[VideoController::class,'editVideo'])->name('editVideo');
    //Route::get('/editVideo/{id}',[VideoController::class,'editVideo'])->name('editVideo');
Route::post('updateVideo/{id}',[VideoController::class,'updateVideo'])->name('updateVideo');
Route::get('/videogiamcan', [VideoController::class,'videogiamcan']);
Route::get('/videotangco', [VideoController::class,'videotangco']);

//user
Route::get('/loginusers',[UsersController::class,'login'])->name('post.users');
Route::post('/loginUsers',[UsersController::class,'index']);
Route::get('/logout',[UsersController::class,'logout']);
Route::get('/registerusers',[UsersController::class,'create']);
Route::post('/storeUser',[UsersController::class,'store'])->name('store.users');

// Route::get('router-training/{id}',[UsersController::class,'test'])->name('store.router_training');


//giảm giá
Route::get('/giamgia', [CartController::class,'giamgia']);
Route::middleware(['auth:sanctum', 'verified'])->get('/listCode',[CartController::class,'Code'])->name('post.code');
Route::middleware(['auth:sanctum', 'verified'])->get('/addCode',[CodeController::class,'create']);
Route::post('/storecode',[CodeController::class,'store'])->name('store.code');
Route::get('/deletecode/{id}',[CodeController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/editCode/{id}',[CodeController::class,'editCode'])->name('editCode');
Route::post('updateCode/{id}',[CodeController::class,'updateCode'])->name('updateCode');




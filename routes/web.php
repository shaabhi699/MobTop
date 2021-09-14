<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
Use App\Http\Controllers\AdminController;

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

Route::get('/logout', function () {
    if(Session::has('user'))
    {
        Session::forget('user');
        return redirect('/login');
    }
    elseif(Session::has('admin'))
    {
        Session::forget('admin');
        return redirect('/adminlogin');
    }
   
});

Route::view("/login","login")->name('login');
Route::view("/register","register");
Route::post("/login",[UserController::class, 'login']);
Route::post("/adminlogin",[AdminController::class, 'admincheck']);
Route::get("/adminlogin",[AdminController::class, 'adminlogin']);
Route::get("/product",[AdminController::class, 'ItemIndex']);
Route::post("/register",[UserController::class, 'register']);
Route::get("/",[ProductController::class, 'index']);
Route::get("detail/{id}",[ProductController::class, 'detail']);
Route::get("search",[ProductController::class, 'search']);
Route::post("add_to_cart",[ProductController::class, 'addToCart']);

Route::get("removecart/{id}",[ProductController::class, 'removeCart']);
Route::post("orderplace",[ProductController::class, 'orderPlace']);
Route::get("/addProduct",[AdminController::class, 'addProduct']);
Route::post("/addProduct/edit",[AdminController::class, 'addProductPost']);
Route::group(['middleware'=>["customer"]],function(){
    Route::get("cartlist",[ProductController::class, 'cartList']);

Route::get("/ordernow",[ProductController::class, 'orderNow']);
Route::get("/myorder",[ProductController::class, 'myOrder']);


});
Route::group(['middleware'=>["admins"]],function(){

    Route::get("/admin",[AdminController::class, 'orderindex']);

});


/*
Route::get('addProduct', 'FileUploadController@fileUpload')->name('file.upload');


Route::post('addProduct', 'FileUploadController@fileUploadPost')->name('file.upload.post');
*/
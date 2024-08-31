<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Giaodien\HomeController;
use App\Http\Controllers\Giaodien\BlogController;
use App\Http\Controllers\Giaodien\SecureController;

use App\Http\Controllers\Hethong\MamagerController;
use App\Http\Controllers\Hethong\CategoryController;

//Duong dan giao dien
Route::get("/",[HomeController::class,"index"])->name("h.trangchu");
Route::get("/danh-muc",[HomeController::class,"category"])->name("h.danhmuc");
Route::get("/san-pham",[HomeController::class,"detail"])->name("h.sanpham");
Route::get("/gio-hang",[HomeController::class,"cart"])->name("h.giohang");
Route::get("/thanh-toan",[HomeController::class,"checkout"])->name("h.thanhtoan");
Route::get("/xac-thuc",[HomeController::class,"comfirm"])->name("h.xacthuc");
Route::get("/lien-he",[HomeController::class,"contact"])->name("h.lienhe");
Route::get("/theo-doi-don-hang",[HomeController::class,"tracking"])->name("h.donhang");
Route::get("/logout",[SecureController::class,"logout"])->name("h.logout");

//duong dan blog
Route::get("/tin-tuc",[BlogController::class,"blog"])->name("h.tintuc");
Route::get("/noi-dung-tin-tuc",[BlogController::class,"blogdetail"])->name("h.noidungtintuc");

//secure
Route::prefix("secure")->group(function(){
    Route::match(['get','post'],"/dang-nhap",[SecureController::class,"login"])->name("h.dangnhap");
    Route::match(['get','post'],"/dang-ky",[SecureController::class,"register"])->name("h.dangky");
});

//duong dan cho he thong
Route::prefix("system")->group(function(){
    Route::get("/quan-tri",[MamagerController::class,"index"])->name("s.quantri");
    Route::get("/bao-tri",[MamagerController::class,"baotri"])->name("s.baotri");
    Route::get("/tat-bao-tri",[MamagerController::class,"tatbaotri"])->name("s.tatbaotri");
    Route::get("/xoa-cache",[MamagerController::class,"xoacache"])->name("s.xoacache");
    Route::match(['get','post'],"/cau-hinh",[MamagerController::class,"config"])->name("s.cauhinh");
    //danh muc
    Route::get("/danh-muc",[CategoryController::class,"index"])->name("s.danhmuc");
});


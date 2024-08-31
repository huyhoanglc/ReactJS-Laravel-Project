<?php

namespace App\Http\Controllers\Giaodien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //trang chủ
    public function index(){
        return view("giaodien/index");
    }

    //danh muc
    public function category(){
        return view("giaodien/category");
    }

    //chi tiet
    public function detail(){
        return view("giaodien/detail");
    }

    //cart
    public function cart(){
        return view("giaodien/cart");
    }
    //checkout
    public function checkout(){
        return view("giaodien/checkout");
    }
    //comfirm
    public function comfirm(){
        return view("giaodien/comfirm");
    }

    //contact
    public function contact(){
        return view("giaodien/contact");
    }
    //tracking
    public function tracking(){
        return view("giaodien/tracking");
    }
    //
}

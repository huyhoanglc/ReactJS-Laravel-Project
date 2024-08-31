<?php

namespace App\Http\Controllers\Giaodien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view("giaodien/blog");
    }
    public function blogdetail(){
        return view("giaodien/blogdetail");
    }
    //
}

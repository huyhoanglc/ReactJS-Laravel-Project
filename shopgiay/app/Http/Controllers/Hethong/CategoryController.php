<?php

namespace App\Http\Controllers\Hethong;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("hethong/category/index");
    }
    //
}

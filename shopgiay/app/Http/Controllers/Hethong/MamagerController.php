<?php

namespace App\Http\Controllers\Hethong;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cauhinh;
use Artisan;

class MamagerController extends Controller
{
    public function index(){
        return view("hethong/mamager/index");
    }
    public function config(Request $request){
        if($request->isMethod('post')){
            $validated=$request->validate([
                'tieude'=>'required|max:160',
                'tukhoa'=>'required',
                'mota'=>'required',
                'tenmien'=>'required',
                'motabaotri'=>'required',
                'email'=>'required|email',
                'host_mail'=>'required',
                'pass_mail'=>'required',
                'youtube'=>'required|url',
                'facebook'=>'required|url',
                'icon'=>'required|image|mimes:jpeg,png,gif,svg|max:4048',
            ]);
            $data=$request->except('_token');
            $databyid=Cauhinh::where("id",$request->id)->first();
            if($request->hasFile('icon')){  //kiểm tra upload file ay chưa
                @unlink('public/image/'.$databyid->icon); //xóa hình cũ
                $img=$request->file("icon"); //lấy thông tin file
                $icon=$img->getClientOriginalName(); //lấy tên file hình
                $img->move('public/image/',$icon);  //di chuyển hình từ ổ C:\xampp\tmp\php634B.tmp sang public/image
                $data['icon']=$icon;
            }
            $databyid->update($data);
            return redirect()->route('s.cauhinh');      
        }else{
            $data['load']=Cauhinh::first();
            return view("hethong/mamager/config",$data);
        }
    }
    public function baotri(){
        Artisan::call('down');
        return redirect()->route('s.cauhinh'); 
    }
    public function tatbaotri(){
        Artisan::call("up");
        return redirect()->route('s.cauhinh'); 
    }
    public function xoacache(){
        Artisan::call("cache:clear");
        return redirect()->route('s.cauhinh'); 
    }
    //
}

<?php

namespace App\Http\Controllers\Giaodien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thanhvien;
use Bcrypt;
use Auth;
use Session;

class SecureController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $validated=$request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6|max:32|alpha_num',
            ]);
            $email=$request->email;
            $matkhau=$request->password;
            $remem=$request->remember;
            if(Auth::attempt(['email'=>$email,'password'=>$matkhau],$remem)){
                if(Auth::user()->trangthai==1){ //bị khóa = 0, hoạt dộng trangthai=1
                    //phan quyen
                    if(Auth::user()->role==1){ //user role=0 , admin role=1
                        return redirect()->route("s.quantri");
                    }else{
                        return redirect()->route("h.trangchu");
                    }
                }else{
                    Session()->flash("thongbao","Tài khoản đã bị khóa!");
                    return redirect()->route("h.dangnhap");
                }
            }else{
                Session()->flash("thongbao","Thông tin đăng nhập không đúng");
                return redirect()->route("h.dangnhap");
            }
        }else{
            return view("giaodien/login");
        }
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'hoten'=>'required|min:6|max:70',
                'email'=>'required|email|unique:thanhvien,email',
                'password'=>'required|min:6|max:32|alpha_num',
            ]);
            $taikhoan=new Thanhvien();
            $taikhoan->hoten=$request->hoten;
            $taikhoan->email=$request->email;
            $taikhoan->password=bcrypt($request->password);
            $taikhoan->save();
            return redirect()->route('h.dangnhap');
        }else{
            return view("giaodien/register");
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('h.trangchu');
    }
    //
}

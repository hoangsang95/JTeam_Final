<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
class LoginController extends Controller {
   

use AuthenticatesUsers;

    //protected $username = 'email';
    //Chỉnh số lần login không thành công và thời gian khóa
    protected $maxLoginAttempts = 5;
    protected $lockoutTime = 1;

    public function dangnhap() {
        if (Auth::check()) {
            if(Auth::user()->User_RootAdmin == 1){
                return redirect('admin/product/product_list');
            }
            else{
                if(strpos(\Request::fullUrl(),'gio-hang'))
                {
                    return redirect('gio-hang');
                }
                return back();
            }
        } 
        
        else {
            return view('layouts.login');
        }
    }

    public function postdangnhap(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required',
        ]);

//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
        if ($validator->fails()) {
                return response()->json([
                            'success' => false,
                            'errors' => $validator->errors()->toArray()
                ]);
            }
        
        //Tăng số lần đăng nhập sai
            $this->incrementLoginAttempts($request);
            
             //Khóa khi đăng nhập sai
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);

                return response()->json([
                    'success' => false,
                    'errors' => $this->sendLockoutResponse($request)]);
            }    
            
        $remember = $request->get('remember');
        //Đăng nhập
        if (Auth::attempt(['User_Email' => $request->email, 'password' => $request->password], $remember)) {
            // Authentication passed...
            if(Auth::user()->User_RootAdmin == 1){
                return response()->json([
                    'success' => true,
                    'url'     => 'admin/product/product_list',
                    'admin'   => true
                ]);
            
            }
        } else {
           
            
            $errors = new MessageBag(['errorLogin' => 'Mật khẩu hoặc email không đúng']);
            return response()->json([
                'success' => false,
                'errors' => $errors
            ]);
        
        }
    }

    public function dangxuat() {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }

}
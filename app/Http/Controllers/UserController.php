<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use Illuminate\Validation\Rule;
class UserController extends Controller {

    //
    public function danhsach() {
        $user = User::all();
        return view('layouts.admin.user.user_list', ['user' => $user]);
    }

    public function them() {
        return view('layouts.admin.user.user_add');
    }

    public function postthem(Request $request) {
        $this->validate($request, User::rules());
        $user = new User;
      
        $user->User_Name = $request->User_Name;
        $user->User_Email = $request->User_Email;
        $user->User_Password = Hash::make($request->User_Password);
        $user->User_RootAdmin = $request->User_RootAdmin;

            
       
        $user->save();
        return redirect('admin/user/user_list')->with('thongbao', 'Thêm thành công');
    }

    public function sua($id) {

        $user = User::where('User_ID', $id)->get();
        return view('layouts.admin.user.user_edit', ['user' => $user]);
    }

    public function postsua(Request $request, $id) {
        $user = User::where('User_ID', '=', $id)->first();

        $this->validate($request, User::rules($id) );

       $input = $request->except('_token','_method');
       foreach($input as $k => $v)
       {
           $user->$k = $v."";
       }
        if ($request->changePassword == "on") {
            $this->validate($request,  User::rules($id)            
            );
            $user->User_Password = $request->User_Password;
        }
     

        $user->save();
        return redirect('admin/user/user_list')->with('thongbao', 'Sửa thành công');
    }

    public function xoa($id) {
        $user = User::where('User_ID', '=', $id);
        $user->delete();
        return redirect('admin/user/user_list')->with('thongbao', 'Xóa thành công');
    }

   
   

}

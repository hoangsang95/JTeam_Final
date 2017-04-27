<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;
use DB;

class CateController extends Controller {

    //
    public function danhsach() {
        $cate = Cate::all();
        return view('layouts.admin.category.category_list', ['cate' => $cate]);
    }

    public function them() {
        return view('layouts.admin.category.category_add');
    }

    public function postthem(Request $request) {
        $cate = Cate::all();
        $this->validate($request,
        ['Cat_Name' => 'required',
        'Cat_Thumbnail' => 'required']
        );
        $cate = new Cate;
        $input  = $request->except('_token');
        foreach($input as $k=>$v)
        {
            $cate->$k = $v."";
        }
        
        $cate->save();
        return redirect('admin/category/category_list')->with('thongbao', 'Thêm thành công');
    }

    public function sua($id) {
        $cate = Cate::where('Cat_ID', $id)->get();
        return view('layouts.admin.category.category_edit', ['cate' => $cate]);
    }

    public function postsua(Request $request, $id) {
        $cate = Cate::where('Cat_ID', '=', $id)->first();

        $input  = $request->except('_token');
        foreach($input as $k=>$v)
        {
            $cate->$k = $v."";
        }
        
        $cate->save();
        return redirect('admin/category/category_edit/' . $cate->Cat_ID)->with('thongbao', 'Sửa thành công');
    }

    public function xoa($id) {
        $cate = Cate::where('Cat_ID', '=', $id);
        $cate->delete();
        return redirect('admin/category/category_list')->with('thongbao', 'Xóa thành công');
    }

}

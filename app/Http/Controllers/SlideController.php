<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class SlideController extends Controller {

    //
    public function danhsach() {
        $slide = Slide::all();
        return view('layouts.admin.slide.slide_list', ['slide' => $slide]);
    }

    public function them() {
        $cate = Cate::all();
        return view('layouts.admin.slide.slide_add', ['cate' => $cate]);
    }

    public function postthem(Request $request) {
        
        $this->validate($request, [
            'Slide_Image' => 'required',
          
        ]);
       // $Slide_Order = $request->input('Slide_Order', 0);
        $slide = new Slide;

        $input = $request->except('_token');

        foreach ($input as $k => $v) {


            $slide->$k = $v."";
        }
        if (!empty(Input::file('Slide_Image'))) {
            $file_name = Input::file('Slide_Image')->getClientOriginalName();
            Input::file('Slide_Image')->move('assets/data/', $file_name);
            $slide->Slide_Image = $file_name;
        }

        $slide->save();
        return redirect('admin/slide/slide_list')->with('thongbao', 'Thêm thành công');
    }

    public function sua($id) {
        $cate = Cate::all();
        $slide = Slide::where('Slide_ID', $id)->get();
        return view('layouts.admin.slide.slide_edit', ['slide' => $slide, 'cate' => $cate]);
    }

    public function postsua(Request $request, $id) {
        $slide = Slide::where('Slide_ID', '=', $id)->first();

        $this->validate($request, [
            ['Slide_Order' => 'numeric']
        ]);
        $input = $request->except('Image_Current', '_token');
        foreach ($input as $k => $v) {
            $slide->$k = $v;
        }
        if (!empty(Input::file('Slide_Image'))) {
            $file_name = Input::file('Slide_Image')->getClientOriginalName();
            Input::file('Slide_Image')->move('assets/data/', $file_name);
            $slide->Slide_Image = $file_name;
        }

        $slide->save();

        return redirect('admin/slide/slide_list')->with('thongbao', 'Sửa thành công');
    }

    public function xoa($id) {
        $slide = Slide::where('Slide_ID', '=', $id);
        $slide->delete();
        return redirect('admin/slide/slide_list')->with('thongbao', 'Xóa thành công');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplies;
class SuppliesController extends Controller
{
    public function danhsach() {
        $supplies = Supplies::all();
        return view('layouts.admin.supplies.supplies_list', ['supplies' => $supplies]);
    }

    public function them() {
        return view('layouts.admin.supplies.supplies_add');
    }

    public function postthem(Request $request) {
        $supplies = Supplies::all();
        $this->validate($request,
        ['Supplies_Name' => 'required',
        'Supplies_Quantity' => 'required']
        );
        $supplies = new Supplies;
        $input  = $request->except('_token');
        foreach($input as $k=>$v)
        {
            $supplies->$k = $v."";
        }
        
        $supplies->save();
        return redirect('admin/supplies/supplies_list')->with('success', 'Thêm thành công');
    }

    public function sua($id) {
        $supplies = Supplies::where('Supplies_ID', $id)->first();
        return view('layouts.admin.supplies.supplies_edit', ['supplies' => $supplies]);
    }

    public function postsua(Request $request, $id) {
        $supplies = Supplies::where('Supplies_ID', '=', $id)->first();

        $input  = $request->except('_token');
        foreach($input as $k=>$v)
        {
            $cate->$k = $v."";
        }
        
        $supplies->save();
        return redirect('admin/supplies/supplies_edit/' . $supplies->Supplies_ID)->with('success', 'Sửa thành công');
    }

    public function xoa($id) {
        $supplies = Supplies::where('Supplies_ID', '=', $id);
        $supplies->delete();
        return redirect('admin/supplies/supplies_list')->with('success', 'Xóa thành công');
    }
}

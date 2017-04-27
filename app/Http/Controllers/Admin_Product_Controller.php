<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App;
use Carbon\Carbon;

class Admin_Product_Controller extends Controller {

    public function __construct() {
        $product_list = Product::all();
        view()->share('product_list', $product_list);
    }

     public function index() {
        return view('layouts.admin.index');
    }

    public function admin_product_list() {
        $product_list = Product::all();
        return view('layouts.admin.product.product_list', ['product_list' => $product_list]);
    }

    public function admin_product_add() {
        $cat = Cate::all();
        return view('layouts.admin.product.product_add', ['cat' => $cat]);
    }

    public function admin_product_add_post(Request $request) {
        
        $this->validate($request, Product::rules());
        $product = new Product;
        // Cài đặt ngày giờ hiện tại
        $product->Product_Datetime = Carbon::now('Asia/Ho_Chi_Minh');
        $input = $request->except('_token');

        foreach ($input as $k => $v) {
            $product->$k = $v . "";
        }

        if (!empty(Input::file('Product_Thumbnail'))) {
            $file_name = Input::file('Product_Thumbnail')->getClientOriginalName();
            Input::file('Product_Thumbnail')->move('assets/data/', $file_name);
            $product->Product_Thumbnail = $file_name;
        }
        $product->save();
        return redirect('admin/product/product_list')->with('thongbao', 'Thêm thành công');
    }

    public function admin_product_edit($id) {
        $cate = Cate::all();
        $product = Product::where('Product_ID', $id)->get();
        return view('layouts.admin.product.product_edit', ['product' => $product[0], 'cate' => $cate]);
    }

    public function admin_product_edit_post(Request $request, $id) {
        $product = Product::where('Product_ID', '=', $id)->first();
        $this->validate($request, Product::rules());
        $request->Product_Datetime = date('Y-m-d H:i:s');



        $input = $request->except('Image_Current', '_token', 'update');
        foreach ($input as $k => $v) {
            $product->$k = $v;
        }
        if (!empty(Input::file('Product_Thumbnail'))) {
            $file_name = Input::file('Product_Thumbnail')->getClientOriginalName();

            Input::file('Product_Thumbnail')->move('assets/data/', $file_name);
            $product->Product_Thumbnail = $file_name;
        }
        $product->save();
        return redirect('admin/product/product_list')->with('thongbao', 'Sửa thành công');
    }

    public function admin_product_delete($id) {
        $product = Product::where('Product_ID', '=', $id);
        $product->delete();
        return redirect('admin/product/product_list')->with('thongbao', 'Xóa thành công');
    }

}

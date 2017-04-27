<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class CompareProductController extends Controller {

    public function them(Request $request, $id) {
        $product_compare = Product::where('Product_ID', $id)->first();
        $product = [];
        $product['Product_ID'] = $id;
        $product['Product_Thumbnail'] = $product_compare->Product_Thumbnail;
        $product['Product_Name'] = $product_compare->Product_Name;
        $product['Product_Price'] = $product_compare->Product_Price;
        $product['Product_Description'] = $product_compare->Product_Description;
        $product['Product_Size'] = $product_compare->Product_Size;
        $product['Product_Color'] = $product_compare->Product_Color;



        $products = session('product_compare');
        if (Session::has('product_compare')) {

            if ($this->kiemtra($id) == false) {

                if (count(Session::get('product_compare')) == 3) {
                    array_shift($products);

                    Session::put('product_compare', $products);
                }
                $request->session()->push('product_compare', $product);
            }
        } else {

            $request->session()->push('product_compare', $product);
        }
        return back()->withInput();
    }

    public function hienthi() {
        $products = session('product_compare');
        if (count(Session::get('product_compare')) > 3) {
            //Xóa phần tử đầu tiên trong mảng
            array_shift($products);
            Session::put('product_compare', $products);
        }
        return view('layouts.product_compare', compact($products));
    }

    public function xoa(Request $request, $id) {
        //dd(Session::get('product_compare'));
        if (Session::has('product_compare') && is_array(Session::get('product_compare'))) {
            $product_compare = Session::get('product_compare');

            foreach ($product_compare as $index => $product) {
                
                if ($product['Product_ID'] == $id) {
                  //Session::forget('product_compare.' . $index);
                  unset($product_compare[$index]);
                }
            }
            session(['product_compare' => $product_compare]);
            return redirect('so-sanh');
        }
    }

    private function kiemtra($id) {
        $array = Session::get('product_compare');
        foreach ($array as $item) {
            if (($item['Product_ID'] === $id)) {
                return true;
            }
        }
        return false;
    }

}

<?php

namespace App\Http\Controllers;

use DB;
use App\CatParent;
use App\Cate;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        // Danh sách sản phẩm
        $products = array();
        $slide = DB::table('slide')->where('Slide_Cat', '=', 0)
                ->get();

        $cat_parent = Cate::where('Cat_Parent', 0)->get();

        foreach($cat_parent as $r){
            $products[$r->Cat_ID] = DB::table('Product')->where('Product_Cat', $r->Cat_ID)->get();
        }
        //$products = Product::whereIn();
        /* -------------------- Fashion ----------------------------- */
        
        $product_latest = DB::table('product')
                        ->join('cat', 'Product_Cat', '=', 'cat.CAT_ID')
                        ->where('Product_Show', 1)
                        ->orderBy('Product_Datetime', 'DESC')->take(6)->get();

        $product_hot = DB::table('product')
                        ->join('cat', 'Product_Cat', '=', 'cat.CAT_ID')
                        ->where('Product_Show', 1)
                        ->where('Product_Hot', 1)
                        ->orderBy('Product_Datetime', 'DESC')->take(6)->get();

        return view('layouts.index', [
                                        'cat_parent' => $cat_parent
                                        ,'slide' => $slide
                                        ,'products' => $products
                                        ,'product_latest' => $product_latest
                                        ,'product_hot' => $product_hot
        ]);
    }

}

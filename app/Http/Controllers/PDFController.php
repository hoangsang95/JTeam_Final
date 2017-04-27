<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\User;
use App\Cate;
use App\Slide;
use App\Contact;
use App\Product;
use App\Warehouse;
use DB;
class PDFController extends Controller {

    public function pdfExportUser() {
        $users = User::all();
        $total = User::count();
        $pdf = PDF::loadView('layouts.excel.excelUser', ['users' => $users, 'total' => $total]);
        return $pdf->download('User.pdf');
    }
    
    public function pdfExportProduct() {
        $products = Product::all();
        $total = Product::count();
        $pdf = PDF::loadView('layouts.excel.excelProduct', ['products' => $products, 'total' => $total]);
        return $pdf->download('Product.pdf');
    }
    
    public function pdfExportCate() {
        $cates = Cate::all();
        $total = Cate::count();
        $pdf = PDF::loadView('layouts.excel.excelCate', ['cates' => $cates, 'total' => $total]);
        return $pdf->download('Category.pdf');
    }
    
    public function pdfExportContact() {
        $contacts = Contact::all();
        $total = Contact::count();
        $pdf = PDF::loadView('layouts.excel.excelContact', ['contacts' => $contacts, 'total' => $total]);
        return $pdf->download('Contact.pdf');
    }
    
    public function pdfExportSlide() {
        $slides = Slide::all();
        $total = Slide::count();
        $pdf = PDF::loadView('layouts.excel.excelSlide', ['slides' => $slides, 'total' => $total]);
        return $pdf->download('Slide.pdf');
    }
    
    public function pdfExportWareHouse() {
        $warehouses_product = DB::table('warehouse')
                ->join('product', 'Product_ID', '=', 'Warehouse_Product')
                ->get();
        $warehouses_user = DB::table('warehouse')->join('user','User_ID', '=' , 'Warehouse_User')->first();
        $total = Warehouse::count();
        $pdf = PDF::loadView('layouts.excel.excelWareHouse', ['warehouses_product' => $warehouses_product, 'total' => $total, 'warehouses_user' => $warehouses_user]);
        return $pdf->download('WareHouse.pdf');
    }
}

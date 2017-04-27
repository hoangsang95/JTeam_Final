<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cate;
use App\Slide;
use App\Contact;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Style_Fill;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Warehouse;
use DB;
class ExcelController extends Controller {

    public function exportUser() {
        $users = User::all();
        $total = User::count();
        Excel::create('User', function($excel) use ($users, $total) {
            $excel->getDefaultStyle();
            $excel->sheet('Excel', function($sheet) use ($users, $total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });
                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelUser')->with("users", $users)->with("total", $total);
            });
        })->export('xls');
    }

    public function exportProduct() {
        $products = Product::all();
        $total = Product::count();
        Excel::create('Product', function($excel) use ($products, $total) {
            $excel->sheet('Excel', function($sheet) use ($products, $total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelProduct')->with("products", $products)->with("total", $total);
            });
        })->export('xls');
    }

    public function exportContact() {
        $contacts = Contact::all();
        $total = Contact::count();
        Excel::create('Contact', function($excel) use ($contacts, $total) {
            $excel->sheet('Excel', function($sheet) use ($contacts, $total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelContact')->with("contacts", $contacts)->with("total", $total);
            });
        })->export('xls');
    }

    public function exportSlide() {
        $slides = Slide::all();
        $total = Slide::count();
        Excel::create('Slide', function($excel) use ($slides, $total) {
            $excel->sheet('Excel', function($sheet) use ($slides, $total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelSlide')->with("slides", $slides)->with("total", $total);
            });
        })->export('xls');
    }

    public function exportCate() {
        $cates = Cate::all();
        $total = Cate::count();
        Excel::create('Category', function($excel) use ($cates, $total) {
            $excel->sheet('Excel', function($sheet) use ($cates, $total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelCate')->with("cates", $cates)->with("total", $total);
            });
        })->export('xls');
    }

    public function exportWareHouse() {
        $warehouses_product = DB::table('warehouse')
                ->join('product', 'Product_ID', '=', 'Warehouse_Product')
                ->get();
        $warehouses_user = DB::table('warehouse')->join('user','User_ID', '=' , 'Warehouse_User')->first();
        $total = Warehouse::count();
        Excel::create('WareHouse', function($excel) use ($warehouses_product,$warehouses_user, $total) {
            $excel->sheet('Excel', function($sheet) use ($warehouses_product,$warehouses_user ,$total) {
                $sheet->cells('A:E', function($cells) {
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->mergeCells('A1:B1');
                $sheet->loadView('layouts.excel.excelWareHouse')->with("warehouses_product", $warehouses_product)->with("warehouses_user" , $warehouses_user)->with("total", $total);
            });
        })->export('xls');
    }

    public function importExcelUser(Request $request) {
        if ($request->hasFile('importUser')) {
            $file_name = Input::file('importUser')->getClientOriginalName();
            Input::file('importUser')->move(storage_path('myfile/'), $file_name);

            $array = Excel::load(storage_path('myfile/' . $file_name), function($reader) {
                        
                    })->get()->toArray();

            try {
                User::insert($array);
            } catch (\Exception $e) {
                return redirect('admin/user/user_list')->with('error', 'Import không thành công');
            }
            return redirect('admin/user/user_list')->with('success', 'Import thành công');
        }
        return redirect('admin/user/user_list')->with('warning', 'Vui lòng chọn file');
    }

    public function importExcelProduct(Request $request) {
        if ($request->hasFile('importProduct')) {
            $file_name = Input::file('importProduct')->getClientOriginalName();
            Input::file('importProduct')->move(storage_path('myfile/'), $file_name);

            $array = Excel::load(storage_path('myfile/' . $file_name), function($reader) {
                        
                    })->get()->toArray();
            try {
                Product::insert($array);
            } catch (\Exception $e) {
                return redirect('admin/product/product_list')->with('error', 'Import không thành công');
            }


            return redirect('admin/product/product_list')->with('success', 'Import thành công');
        }
        return redirect('admin/product/product_list')->with('warning', 'Vui lòng chọn file');
    }

    public function deleteAll() {
        Product::delete();
    }

}

<?php

namespace App\Http\Controllers;

use App\Warehouse;
use App\Cate;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App;
use Carbon\Carbon;
use DB;

class Admin_Warehouse_Controller extends Controller {

   // Danh sách sản phẩm trong kho
    public function admin_warehouse_list() {
        $warehouse_list = DB::table('warehouse')
                            ->join('product','Warehouse_Product','=','Product_ID')
                            ->selectRaw('*, SUM(Warehouse_Count) as quantity')
                            ->groupBy('Warehouse_Product')
                            ->get();
        return view('layouts.admin.warehouse.warehouse_list', ['warehouse_list' => $warehouse_list]);
    }
    // Lịch sử nhập/xuât kho
    public function admin_warehouse_history() {
        $warehouse_history_product = DB::table('warehouse')->join('product','Product_ID', '=' , 'Warehouse_Product')->get();
        $warehouse_history_user = DB::table('warehouse')->join('user','User_ID', '=' , 'Warehouse_User')->first();
        return view('layouts.admin.warehouse.warehouse_history', 
                ['warehouse_history_product' => $warehouse_history_product,
                 'warehouse_history_user' => $warehouse_history_user
                
                ]);
    }
    // Nhập/xuất sản phẩm kho
    public function admin_warehouse_import() {
        $products = Product::get(['Product_ID','Product_Name']);
        $post = array(
            'Warehouse_Datetime'=> date('Y-m-d H:i:s')
            ,'Warehouse_Product' => ''
            ,'Warehouse_Count' => 0
            ,'Warehouse_User' =>''
        );
        return view('layouts.admin.warehouse.warehouse_import',['post' => $post, 'products' => $products]);
    }
    // Ajax chọn sản phẩm để xử lý
     public function admin_warehouse_import_ajax(Request $request) {
        $product_id = $request->get('product_id');
        $product = DB::table('product')
                ->where('Product_ID',$product_id)
                ->join('cat','Product_Cat','=','cat.CAT_ID')
                ->select('product.*','cat.*')
                ->get()
                ->toArray();
        if(count($product)){
            return response()->json($product[0]);
        }
        else{
        echo "fail";
        }
    }


     public function admin_warehouse_import_post(Request $request) {
        $warehouse = new Warehouse;
        $input = $request->except('_token');
        if(count($input['quantity'])){
             foreach($input['quantity'] as $k=>$v){
                $warehouse->Warehouse_Product = $k;
                if($input['status'] == 'import'){
                $warehouse->Warehouse_Count = $v;
                }
                else{
                $warehouse->Warehouse_Count = $v*-1;
                }
                $warehouse->Warehouse_User = \Auth::user()->User_ID;
                $warehouse->Warehouse_Datetime = Carbon::now('Asia/Ho_Chi_Minh');
                $warehouse->save();
                $warehouse = new Warehouse;
             }

        }
        return redirect('admin/warehouse/warehouse_history')->with('thongbao', 'Thêm thành công');
    }


}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
class shoppingController extends Controller {

    public function getAddCart(Request $requet, $id) {

        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->Add($product, $product->Product_ID);

        $requet->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getcart() {
        if (!Session::has('cart') || count(Session::get('cart')) == 0) {
            return view('layouts.product_cart', ['thongbao' => 'Không có sản phẩm nào trong giỏ hàng']);
        }
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);



        return view('layouts.product_cart', ['product' => $cart->item, 'totalPrice' => $cart->totalPrice]);
    
    }
        
    public function soluonggiam($id) {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->Qtygiam($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function soluongtang($id) {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->Qtytang($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function delete($id) {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function dathang() {
       $cart= Session::get('cart');
    //dd(Session::get('cart'));
    return view('layouts.checkout',['product' => $cart->item, 'totalPrice' => $cart->totalPrice]);
    }
    
    public function thanhtoan(Request $request)
    {
        $cart= Session::get('cart');
        $validator = $this->validate($request, [
            'Cart_Name' => 'required',
            'Cart_Email' => 'required|email',
            'Cart_Mobile' => 'required|numeric',
            'Cart_Address' => 'required',
        ]);
        $cartdetail = array();
        
        $input = $request->except('_token');
        $input['Cart_User'] = Auth::user()->User_ID;
        /*
        if($validator->passes())
        {
            */
            $id = DB::table('cart')->insertGetId($input);
            foreach($cart->item as $k=>$v){
                $cartdetail['CartDetail_Cart'] = $id;
                $cartdetail['CartDetail_Product'] = $cart->item[$k]['item']->Product_ID;
                $cartdetail['CartDetail_Quantity'] = $cart->item[$k]['qty'];
                $cartdetail['CartDetail_Price'] = $cart->item[$k]['item']->Product_Price;
                DB::table('cartdetail')->insert($cartdetail);
            }
            Session::forget('cart');
            try{
            Nexmo::message()->send([
                'type'=> 'text',    
                'to' => '84'. substr($request->Cart_Mobile,1),
                'from' => 'Sang',
                'text' => 'Ban da dat hang thanh cong',

            ]);
            }
            catch(\Exception $e)
            {
                
            }

             echo "<script> 
                alert('Đặt hàng thành công');
                window.location ='" . url('dat-hang') . "'
            </script>";
            /*
            
        }
        
            */
       
    }

}

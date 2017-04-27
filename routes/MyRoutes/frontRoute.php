<?php

/* ----------------- Route cho trang chủ ---------------- */
Route::get('/', 'HomeController@index');

// Route::get('/','HomeController@get_cate');

/* --------------------------------------------------- */
//So sánh sản phẩm
Route::group(['middleware' => ['web']], function () {
    Route::get('so-sanh/them-{id}', 'CompareProductController@them');
    Route::get('so-sanh', 'CompareProductController@hienthi');
    Route::get('so-sanh/xoa-{id}', 'CompareProductController@xoa');
});


Route::get('cart', function(){
    return view('layouts.product_cart');
});

// Chi tiết sản phẩm
Route::get('san-pham-{id}', 'MyController@detail');
// Danh sách sản phẩm thuộc chuyên mục
Route::get('chuyen-muc-{id}', 'MyController@product_list');

// Giỏ hàng
Route::get('mua-hang/{id}','shoppingController@getAddCart');
Route::get('xoa/{id}',['as' => 'xoa', 'uses' => 'shoppingController@delete']);
Route::get('giam/{id}',['as' => 'giam', 'uses' => 'shoppingController@soluonggiam']);
Route::get('tang/{id}',['as' => 'tang', 'uses' => 'shoppingController@soluongtang']);
Route::get('gio-hang', ['as' => 'giohang', 'uses' => 'shoppingController@getcart']);
Route::get('dat-hang', 'shoppingController@dathang');
Route::post('thanh-toan', 'shoppingController@thanhtoan');
/* ------ ------------ ----------- --------- ------------
  Các Module xử lý
  ------ ------------ ----------- --------- ------------ */
// Trả vế kết quả tìm kiếm
Route::get('search', 'MyController@search');


// 
//Liên hệ

Route::get('lien-he', ['as' => 'getLienHe', 'uses' => 'ContactController@get_lienhe']);
Route::post('lien-he', ['as' => 'postLienHe', 'uses' => 'ContactController@post_lienhe']);
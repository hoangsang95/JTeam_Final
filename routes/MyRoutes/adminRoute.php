<?php

//Login

Route::get('login', 'Auth\LoginController@dangnhap');
Route::post('login', 'Auth\LoginController@postdangnhap');
Route::get('admin/logout', 'Auth\LoginController@dangxuat');
Route::get('admin', 'Admin_Product_Controller@index');


//Quản lý

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('category_list', 'CateController@danhsach');
        Route::get('category_delete/{id}', 'CateController@xoa');
        Route::get('category_edit/{id}', 'CateController@sua');
        Route::post('category_edit/{id}', 'CateController@postsua');
        Route::get('category_add', 'CateController@them');
        Route::post('category_add', 'CateController@postthem');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('product_list', 'Admin_Product_Controller@admin_product_list');
        Route::get('product_edit/{id}', 'Admin_Product_Controller@admin_product_edit');
        Route::post('product_edit/{id}', 'Admin_Product_Controller@admin_product_edit_post');
        Route::get('product_delete/{id}', 'Admin_Product_Controller@admin_product_delete');
        Route::get('product_add', 'Admin_Product_Controller@admin_product_add');
        Route::post('product_add', 'Admin_Product_Controller@admin_product_add_post');
    });
	Route::group(['prefix' => 'warehouse'], function () {
        Route::get('warehouse_list', 'Admin_Warehouse_Controller@admin_warehouse_list');
        Route::get('warehouse_import', 'Admin_Warehouse_Controller@admin_warehouse_import');
        Route::post('warehouse_import', 'Admin_Warehouse_Controller@admin_warehouse_import_post');
        Route::get('warehouse_import_ajax/{product_id}',[
            'as'=>'warehouse_import_ajax',
            'uses'=> 'Admin_Warehouse_Controller@admin_warehouse_import_ajax']);
        Route::get('warehouse_history', 'Admin_Warehouse_Controller@admin_warehouse_history');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('slide_list', 'SlideController@danhsach');
        Route::get('slide_edit/{id}', 'SlideController@sua');
        Route::post('slide_edit/{id}', 'SlideController@postsua');
        Route::get('slide_delete/{id}', 'SlideController@xoa');
        Route::get('slide_add', 'SlideController@them');
        Route::post('slide_add', 'SlideController@postthem');
    });
    
    Route::group(['prefix' => 'supplies'], function () {
        Route::get('supplies_list', 'SuppliesController@danhsach');
        Route::get('supplies_edit/{id}', 'SuppliesController@sua');
        Route::post('supplies_edit/{id}', 'SuppliesController@postsua');
        Route::get('supplies_delete/{id}', 'SuppliesController@xoa');
        Route::get('supplies_add', 'SuppliesController@them');
        Route::post('supplies_add', 'SuppliesController@postthem');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('user_list', 'UserController@danhsach');
        Route::get('user_delete/{id}', 'UserController@xoa');
        Route::get('user_edit/{id}', 'UserController@sua');
        Route::patch('user_edit/{id}', 'UserController@postsua');
        Route::get('user_add', 'UserController@them');
        Route::post('user_add', 'UserController@postthem');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('contact_list', 'ContactController@danhsach');
        Route::get('contact_delete/{id}', 'ContactController@xoa');
        Route::get('contact_edit/{id}', 'ContactController@sua');
        Route::post('contact_edit/{id}', 'ContactController@postsua');
    });
});


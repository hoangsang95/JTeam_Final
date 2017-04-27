<?php

App::setLocale('vi');
/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::get('sms', function(){
    Nexmo\Laravel\Facade\Nexmo::message()->send([
    'type'=> 'unicode',    
    'to' => ' 84986197250',
    'from' => 'Sang',
    'text' => 'Gui thanh cong!',
    
]);
});



require base_path('routes/MyRoutes/excel_pdflRoute.php');
require base_path('routes/MyRoutes/frontRoute.php');
require base_path('routes/MyRoutes/socialLoginRoute.php');
require base_path('routes/MyRoutes/adminRoute.php');

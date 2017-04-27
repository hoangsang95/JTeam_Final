<?php

//Login mạng xã hội


Route::get('auth/{provider}', 'Auth\SocialLoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialLoginController@handleProviderCallback');


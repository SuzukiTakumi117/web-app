<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});    

Route::get ('/login',function() {
    return 'ログイン画面';
});    

Route::get('/register', function(){
    return view('register');
});

Route::get('/task', function() {
    return view('task');
});

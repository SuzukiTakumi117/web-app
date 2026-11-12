<?php

use Illuminate\Support\Facades\Route;
  

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});


Route::get('/task/create', function() {
    return view('task_create');
});

Route::get('/task/index', function() {
    return view('task_index');
});

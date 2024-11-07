<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel.index');
});
Route::get("categories",function(){
    return view("panel.category");
});
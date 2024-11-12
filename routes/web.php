<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('panel.index');
});
Route::get("categories",function(){
    return view("panel.category");
});
Route::post("categories",[CategoryController::class,"AddCategory"]);
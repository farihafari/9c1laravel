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
Route::get("details",[CategoryController::class,"ViewDetail"]);
Route::get("update.{id}",[CategoryController::class,"UpdateCategory"]);
Route::post("edit",[CategoryController::class,"EditCategory"]);
Route::get("delete.{id}",[CategoryController::class,"DeleteCategory"]);

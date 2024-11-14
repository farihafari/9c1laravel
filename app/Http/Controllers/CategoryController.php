<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //insert
    function AddCategory(Request $request){
        $catObject = new Category();
        $catObject->name=$request->cname;
        $catImage = time().".".$request->cimage->extension();
        $request->cimage->move(public_path("assets/img/categories"),$catImage);
        $catObject->image= $catImage;
        $catObject->save();
        return back()->with("category","add category");
    }
    function ViewDetail(){
        $allCat = Category::all();
        return view("panel.viewcat",compact("allCat"));
    }
}

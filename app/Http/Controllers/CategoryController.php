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
    function UpdateCategory($keyId){
        $data = Category::find($keyId);
        return view('panel.update',compact("data"));
    }
    function EditCategory(Request $request){
        $cat = Category::find($request->cid);
        if(isset($request->cimage)){
            $catImage = time().".".$request->cimage->extension();
            $request->cimage->move(public_path("assets/img/categories"),$catImage);
            $cat->image= $catImage;
        }
        $cat->name=$request->cname;
        $cat->save();
        return redirect("details")->with("updateCat","successfully");
    }
    function DeleteCategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect("details")->with("DeleteCategory","successfully");
    }
}

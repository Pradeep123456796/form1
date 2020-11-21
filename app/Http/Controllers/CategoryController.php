<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\category;

class CategoryController extends Controller
{
  function category(Request $req){
    	$category_name = new category;
    	$category_name->category_name=$req->category_name;
    	$category_name->save();
    	return redirect("category");
    }
}

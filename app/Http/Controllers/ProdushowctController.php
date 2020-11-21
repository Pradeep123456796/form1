<?php


/*namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class ProdushowctController extends Controller
{
        function productshow(){
             $product_list = DB:: table('product_category')->join('product_type','product_category.id','=','product_type.cat_id')->get();
             $product_list_array = json_decode($product_list,true);
             return  view("productlist",["product_list"=>$product_list_array]);
       
    } 


}
*/
<?php
namespace App\Http\Controllers;
use file;
use Illuminate\Http\Request;
Use App\Models\category;
Use App\Models\Product;
use Excel;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
Use Illuminate\Support\Facades\DB;
Use PDF;

class ProductController extends Controller
{
    function show(){
    	$list_data = category::all();
    	return view("product",["lstdata"=>$list_data]);
     }

    function insert(Request $req){  
      $req->validate(['product_name'=>'required','product_image'=>'required','cat_id'=>'required']);
    	$product_name = $req->product_name;
    	$cat_id       = $req->cat_id;
    	$product_image = $req->file('product_image');
    	$image_name = time().'-'.$product_image->extension();
    	$product_image->move(public_path('images'),$image_name);
    	$product = new Product();
    	$product->product_name = $product_name;
    	$product->cat_id       = $cat_id;
    	$product->product_image = $image_name;
    	$product->save();
    	return redirect('productlist');
    }

    function edit($id){
     	$data_edit = Product::find($id);
     	$list_data = category::all();
     	return view("producteditlistdata",["edit_data"=>$data_edit,"category_data"=>$list_data]);
     }

    function update(Request $req){
    	$req->validate(['product_name'=>'required','cat_id'=>'required']); 
		$product_name = $req->product_name;
    	$cat_id       = $req->cat_id;
    	$product = Product::find($req->id);
    	$product_image = $req->file('product_image');
    	if($product_image){
    		$image_name = time().'-'.$product_image->extension();
    		$product_image->move(public_path('images'),$image_name);
    		if(File::exists(public_path('images/'.$product->product_image))){
    			File::delete(public_path('images/'.$product->product_image));
    		}
    		$product->product_image = $image_name;
    	}
 
    	$product->product_name = $product_name;
    	$product->cat_id       = $cat_id;
    	$product->save();
    	return redirect('productlist');
     }

     function delete($id){
     	$delete_data = Product::find($id);
	    // File::delete(public_path('images/'.$delete_data->$id));
     	$delete_data->delete();
     	return redirect("productlist");
     }

      
     function productshow(Request $req){
  $product_list = /* Product::  paginate(10);*/
  DB:: table('product_category')->join('product_type','product_category.id','=','product_type.cat_id')->orderBy('product_type.id', 'DESC')->get();
  $product_list_array = Product::where('product_name','like','%'.$req->input('query').'%' )->get();
    $product_list_array = json_decode($product_list,true);
             return  view("productlist",["product_list"=>$product_list_array,"product_list"=>$product_list_array]);
       
    }

     function showdataw(Request $category_id){
        $product_name = Product::find($category_id);
        return view("productautoajax",['product_name'=>$product_name]);
     } 

   
   function exportintoexcel(){
   	return Excel::download(new ProductExport,'productlist.xlsx');

   }

   function exportintoCSV(){
   	return Excel::download(new ProductExport,'productlist.csv');
   }

   function showdata(Request $req){
    	$list_data = Product::all();
        $msg = "This is a simple message.";
    	return view("productauto",["lstdata"=>$list_data]);
     }
  function dubshowdata(Request $req){
        $list_data = Product::all();
        $msg = "This is a simple message.";
        return view("dub",["lstdata"=>$list_data]);
     }
    
     function importexcel(){
     	return view('import-excel');
     }

     function import(Request $req){
     	/*Excel::import(new ProductImport,$req->file);*/
     	Excel::import(new ProductImport,request()->file('file'));
     	return "recorded success fully";

     }

     function pdffile(){
     	$product_data =  DB:: table('product_category')->join('product_type','product_category.id','=','product_type.cat_id')->get();
     	$product_list_array = json_decode($product_data,true);
     /*	echo "<pre>";
     	return print_r($product_list_array);*/ /*Product::all();*/
     	return view('pdffile',compact('product_list_array'));
     }

     function pdffunction(){
     	$productpdf = DB:: table('product_category')->join('product_type','product_category.id','=','product_type.cat_id')->get();
     	$product_list_array = json_decode($productpdf,true);

     	$pdf_view = PDF::loadView('pdffile',compact('product_list_array'));
     	return $pdf_view->download('product.pdf');
     }

    

     function search(Request $req){
    $product_list_array = Product::where('product_name','like','%'.$req->input('query').'%' )->get();
         if(count($product_list_array)>0){
            return view("productlist",["product_list"=>$product_list_array]);
         }else{
            $not =  "Not data Found";
            return $not;
         }
     }




     


}

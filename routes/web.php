<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\DaataController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\RegrationController;
use App\Http\Controllers\UsershowController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdushowctController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

//Route::get("user",[Usercontroller::class,"usercontroler"]);
/*Route::post("user",[UserController::class,"usercontroler"]);
Route::view("user","user");*/

/*Route::view("index","index");*/
/*Route::view("index2","index2");*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
	Route::view("index","index");
	Route::view("index2","index2");
	Route::view("index3","index3");
	Route::view("widgets","pages/widgets");
	Route::view("top-nav-sidebar","pages/layout/top-nav-sidebar");
	Route::view("boxed","pages/layout/boxed");
	Route::view("fixed-sidebar","pages/layout/fixed-sidebar");
	Route::view("fixed-sidebar-custom","pages/layout/fixed-sidebar-custom");
	Route::view("collapsed-sidebar","pages/layout/collapsed-sidebar");
	Route::view("chartjs","pages/charts/chartjs");
	Route::view("inline","pages/charts/inline");
	Route::view("general","pages/UI/general");
	Route::view("icons","pages/UI/icons");
	Route::view("buttons","pages/UI/buttons");
	Route::view("sliders","pages/UI/sliders");
	Route::view("modals","pages/UI/modals");
	Route::view("navbar","pages/UI/navbar");
	Route::view("timeline","pages/UI/timeline");
	Route::view("ribbons","pages/UI/ribbons");
	Route::view("general","pages/forms/general");
	Route::view("advanced","pages/forms/advanced");
	Route::view("editors","pages/forms/editors");
	//Route::view("login","pages/forms/login");
	//Route::post("login",[ValidationController::class,"valadtion"]);
	Route::view("simple","pages/tables/simple");
	Route::view("data","pages/tables/data");
	Route::view("fixed-topnav","pages/layout/fixed-topnav");
	Route::view("fixed-footer","pages/layout/fixed-footer");
	Route::view("top-nav","pages/layout/top-nav");
	Route::get("datashoww",[DaataController::class,"datashow"]);
	Route::view("regration","pages/forms/regration");	
	Route::get("editlist/{id}",[UserController::class,"editlist"]);
	Route::post("editlist",[UserController::class,"update"]);
	Route::get("delete/{id}",[UserController::class,"delete"]);
	Route::get("userlist",[UserController::class,"listdata"]);
	Route::get("datashow",[DaataController::class,"test_data"]);
	Route::get("userlistdata",[UsershowController::class,"listdata"]);
	Route::post("regration",[RegrationController::class,"regrationcontroler"]);
	Route::get("editlistdata/{id}",[UsershowController::class,"editlist"]);
	Route::post("editlistdata",[UsershowController::class,"update"]);
	Route::get("deletedata/{id}",[UsershowController::class,"delete"]);
	Route::get("userlistdata",[UsershowController::class,"search"]);
	Route::post("category",[CategoryController::class,"category"]);
   	Route::view("category","category");
   	Route::get("product",[ProductController::class,"show"]);
   	Route::post("product",[ProductController::class,"insert"]);
   	Route::get("productlist",[ProductController::class,"productshow"]);
   	Route::get("productdeletedata/{id}",[ProductController::class,"delete"]);
   	Route::get("producteditlistdata/{id}",[ProductController::class,"edit"]);
   	Route::post("producteditlistdata",[ProductController::class,"update"]);
    Route::get("export-excel",[ProductController::class,"exportintoexcel"]);
    Route::get("export-csv",[ProductController::class,"exportintoCSV"]);
    Route::get("productauto",[ProductController::class,"showdata"]);
    Route::get("import-excel",[ProductController::class,"importexcel"]);
    Route::post("import-excel",[ProductController::class,"import"]);
    Route::get("productpdf",[ProductController::class,"pdffile"]);
    Route::get("downproductpdf",[ProductController::class,"pdffunction"]);
    Route::get("productajax/{category_id}",[ProductController::class,"editajax"]);

 Route::get("dub",[ProductController::class,"dubshowdata"]);
   Route::get('/getmsg',[ProductController::class,"showdataw"]);
   Route::get('/getdub',[ProductController::class,"showdataw"]);

   
    //Route::get("productlist",[ProductController::class,"search"]);




});

   
/*   Route::resource('productlist','ProductController');*/
  // Route::view("producteditlistdata/{id}",[ProductController::class,"shower"]);


   /*Route::view("product","product");*/

	/*Route::view("flot","pages/charts/flot");*/
/*Route::get('logout',function(){
	Session::forget('email');
	return redirect("login");
});*/
/*Route::get('validation',function(){
	if(session()->has('email',null)){
		return redirect('index');
	}

	return view("validation","pages/forms/validation");

});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

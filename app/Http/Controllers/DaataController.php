<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\DB;
*//*use App\Models\Worldsindia;
*/
use App\Models\Worldsindia;  
use App\Models\Testmodel;
class DaataController extends Controller
{
 function datashow(){
 	return Worldsindia::all();
 }
function test_data(){
	return Testmodel::all();
}
}

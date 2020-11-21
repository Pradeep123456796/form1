<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Tetslaravel;

class UserController extends Controller
{
    function usercontroler(Request $req){
    	$member = new Tetslaravel;
    	$member->name=$req->name;
    	$member->email=$req->email;
    	$member->address=$req->address;
    	$member->save();
    	return redirect("userlist");
    }

    function listdata(){
    	$list_data =  Tetslaravel::all();
    	return view("userlist",["lstdata"=>$list_data]);
    }
     function editlist($id){
     	$data_edit = Tetslaravel::find($id);
     	return view("editlist",["edit_data"=>$data_edit]);
     }
      function delete($id){
     	$delete_data = Tetslaravel::find($id);
     	$delete_data->delete();
     	return redirect("userlist");
     }

     function update(Request $req){
     	$updata_data = Tetslaravel::find($req->id);
     	$updata_data->name=$req->name;
     	$updata_data->email=$req->email;
     	$updata_data->address=$req->address;
     	$updata_data->save();
     	return   redirect("userlist");
     }
}

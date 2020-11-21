<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class UsershowController extends Controller
{
     function listdata(){
    	$list_data =  User::all();
    	return view("userlistdata",["lstdata"=>$list_data]);
    }

     function editlist($id){
     	$data_edit =User::find($id);
     	return view("editlistdata",["edit_data"=>$data_edit]);
     }

      function update(Request $req){
     	$updata_data = User::find($req->id);
     	$updata_data->name=$req->name;
     	$updata_data->email=$req->email;
     	$updata_data->save();
     	return   redirect("userlistdata");
     }

      function delete($id){
     	$delete_data = User::find($id);
     	$delete_data->delete();
     	return redirect("userlistdata");
     }

     function search(Request $req){
     	 $data = User::where('name','like','%'.$req->input('query').'%' )->orwhere('email','like','%'.$req->input('query').'%')->get();
     	 if(count($data)>0){
     	 	return view("userlistdata",["lstdata"=>$data]);
     	 }else{
     	 	$not =  "Not data Found";
     	 	return $not;
     	 }
     }
}

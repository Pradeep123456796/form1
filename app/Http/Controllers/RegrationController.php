<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Userlogin;
class RegrationController extends Controller

{
   function regrationcontroler(Request $req){
    	$member = new Userlogin ;
    	$member->username=$req->username	;
    	$member->usermobileno=$req->usermobileno;
    	$member->email=$req->email;
    	$member->password=$req->password;
    	$member->save();
    	return redirect("regration")->with('msg',"This is account created");
    }
}

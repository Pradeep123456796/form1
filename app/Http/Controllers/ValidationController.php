<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use App\Models\Userlogin;
class ValidationController extends Controller
{
    function valadtion(Request $req){
    /*	$email = $req->email;
    	$password = $req->password;

    	$session =Userlogin::where(['email'=>$email])->first();
    	return $session;*/

    	$user = Userlogin::where(['email'=>$req->email])->first();
    	if(!$user->password  || !Hash::check($user->password,$req->password)){
    		return "User name and password are no match";
    	}else{
    		$req->session()->put('email',$user->email);
    		  return redirect('index');
    	}

    }
}

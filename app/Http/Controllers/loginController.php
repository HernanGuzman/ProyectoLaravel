<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use DB;

class loginController extends Controller
{
    public function _construct(){

    }

    public function index(){
    	
		return view('login.welcome');
    	

    }

    

   
}

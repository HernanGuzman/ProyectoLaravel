<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\IngresoRequest;

use Illuminate\Support\Facades\Hash;

use DB;

class IngresoController extends Controller
{
     public function _construct(){

    }

    public function index(){
    	
		return view('login.ingreso');
    	

    }

    public function logout(){
    	
    	//BORRO TODAS LAS VARIABLES DE SESIÓN
    	session()->forget('idusuario');
    	session()->forget('Nombre');
    	session()->forget('Mail');
    	session()->forget('Rol');
		return view('login.ingreso');
    	

    }

    public function store(IngresoRequest $request){

    	if($request){
    		
    		$mail = $request->get('Mail');
    		$pass = $request->get('Password');
    		$user = DB::table('usuario')->where([
    			['Mail', '=', $mail ],
    			
    			  ])->get();
    		
    		foreach($user as $usu){
    			
    			$passHash = $usu->Password;
    			
    			if(Hash::check($pass, $passHash))
    			{
    				
    				session(['idusuario'=>$usu->Idusuario,
    					'Nombre'=>$usu->Nombre,
    					'Mail'=>$usu->Mail,
    					'Rol'=>$usu->IdRol
    			]);
    				
    				return view('home.home', ['usu'=>$usu]);
    			}
    			
    			//
    		}
    		

    		

    		
    		

    		
    		
    		

    		
    	}
			
    		

    }

    
}

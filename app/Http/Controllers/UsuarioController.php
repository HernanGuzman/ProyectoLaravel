<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;

use App\Usuario;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\UsuarioRequest;

use Illuminate\Support\Facades\Hash;

use DB;

class UsuarioController extends Controller
{
	public function _construct(){

    }

    public function index(Request $request){
    	if($request){
    		

    		
    		$query=trim($request->get('searchText'));

    		$usuarios = DB::table('usuario as u')
    		//BUSCO EL REGISTRO DE ROL
    		->join('rol as r', 'u.IdRol', '=', 'r.IdRol')
    		//CON EL SELECT MUESTRO LO QUE QUIERO EN LA LISTA
    		->select('u.IdUsuario', 'u.Nombre', 'u.Mail', 'r.Nombre as NombreRol')
    		->where('u.Nombre', 'LIKE', '%' .$query. '%') 
    		-> paginate(5);

    		return view('administracion.usuarios.index', ['usuarios'=>$usuarios, "searchText"=>$query]);
    	}

    }

    public function create(){
    	
    	//PARA CARGAR UN NUEVO USUARIO TENGO QUE MOSTRAR TODOS LOS ROLES
    	//LEO TODOS LOS ROLES
    	$roles=DB::table('rol')->get();
    	//SE LOS PASO A LA LISTA CREATE
    	return view ("administracion.usuarios.create", ['roles'=>$roles]);

    }

    public function store(UsuarioRequest $request){

			
    		$usu = new Usuario;
        	$usu->Nombre=$request->get('Nombre');
        	$usu->Direccion=$request->get('Direccion');
       		$usu->Mail=$request->get('Mail');
        	$usu->Telefono=$request->get('Telefono');
        	$pass = $request->get('Password');
        	$usu->Password=Hash::make($pass);
        	$usu->IdRol=$request->get('IdRol');
        	 
        	
        	$usu->save();
    	
        //return Redirect::to('/usuarios');

    }

    public function show($id){
    	$roles=DB::table('rol')->get();
    	//SE LOS PASO A LA LISTA CREATE
    	
    	return view("administracion.usuarios.edit", ['usuario'=>Usuario::findOrFail($id), 'roles'=>$roles]);

    }
    public function edit($id){
    	$roles=DB::table('rol')->get();
    	$user = Usuario::findOrFail($id);
    	//SE LOS PASO A LA LISTA CREATE
    	
    	return view("administracion.usuarios.edit", ['usuario'=>$user, 'roles'=>$roles]);
    	
    }
		 

    

    public function update(UsuarioRequest $request, $id){
    	$usu = Usuario::findOrFail($id);
    	$usu->Nombre=$request->get('Nombre');
        $usu->Direccion=$request->get('Direccion');
       	$usu->Mail=$request->get('Mail');
        $usu->Telefono=$request->get('Telefono');
        $usu->IdRol=$request->get('IdRol');
    	$usu->update();
    	return Redirect::to('/usuarios'); 

    }

    public function destroy($id){
    	$usu = DB::table('usuario')->where('IdUsuario', '=', $id) ->delete();
    	return Redirect::to('/usuarios'); 
    }
}


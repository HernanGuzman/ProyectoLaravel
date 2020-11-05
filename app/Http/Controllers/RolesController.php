<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;

use App\roles;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\RolesRequest;

use DB;

class RolesController extends Controller
{
	public function _construct(){

    }

    public function index(Request $request){
    	if($request){

    		$query=trim($request->get('searchText'));

    		$roles = DB::table('rol')->where('Nombre', 'LIKE', '%' .$query. '%') -> paginate(5);

    		return view('administracion.roles.index', ['roles'=>$roles, "searchText"=>$query]);
    	}

    }

    public function create(){
    	return view ("administracion.roles.create");

    }

    public function store(RolesRequest $request){
    	$rol = new roles;
        $rol->Nombre=$request->get('Nombre');
        $rol->Descripcion=$request->get('Descripcion');
        $rol->save();
        return Redirect::to('/roles');

    }

    public function show($id){
    	return view("administracion.roles.show", ['rol'=>roles::findOrFail($id)]);

    }
    public function edit($id){
    	return view("administracion.roles.edit", ['rol'=>roles::findOrFail($id)]);
    }


    public function update(RolesRequest $request, $id){
    	$rol = roles::findOrFail($id);
    	$rol->Nombre=$request->get('Nombre');
    	$rol->update();
    	return Redirect::to('/roles'); 

    }

    public function destroy($id){
    	$rol = DB::table('rol')->where('IdRol', '=', $id) ->delete();
    	return Redirect::to('/roles'); 
    }
}

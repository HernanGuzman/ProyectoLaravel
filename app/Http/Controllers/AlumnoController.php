<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function _construct(){

    }

    public function index(Request $request){
    	if($request){

    		$query=trim($request->get('searchText'));

    		$alumnos = DB::table('alumnos')->where('Nombre', 'LIKE', '%' .$query. '%') -> paginate(5);

    		return view('alumno.alumno.index', ['alumnos'=>$alumnos, "searchText"=>$query]);
    	}

    }

    public function create(){
    	return view ("inscrpciones.alumnos.create");

    }
}

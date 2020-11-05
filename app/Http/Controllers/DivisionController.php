<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Division;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\DivisionFormRequest;

use DB;

class DivisionController extends Controller
{
    public function _construct(){

    }

    public function index(Request $request){
    	if($request){

    		$query=trim($request->get('searchText'));

    		$divisiones = DB::table('division')->where('Nombre', 'LIKE', '%' .$query. '%') -> paginate(5);

    		return view('alumno.division.index', ['divisiones'=>$divisiones, "searchText"=>$query]);
    	}

    }

    public function create(){
    	return view ("alumno.division.create");

    }

    public function store(DivisionFormRequest $request){
    	$division = new Division;
        $division->Nombre=$request->get('Nombre');
        $division->save();
        return Redirect::to('/division');

    }

    public function show($id){
    	return view("alumno.division.show", ['division'=>Division::findOrFail($id)]);

    }
    public function edit($id){
    	return view("alumno.division.edit", ['division'=>Division::findOrFail($id)]);
    }


    public function update(DivisionFormRequest $request, $id){
    	$division = Division::findOrFail($id);
    	$division->Nombre=$request->get('Nombre');
    	$division->update();
    	return Redirect::to('/division'); 

    }

    public function destroy($id){
    	$division = DB::table('division')->where('IdDivision', '=', $id) ->delete();
    	return Redirect::to('/division'); 
    }
}

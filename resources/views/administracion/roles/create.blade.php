@extends ('layouts.admin')

@section('contenido')
 <div class="content">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Nuevo Rol</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif

 		{!!Form::open(array('url' => '/roles', 'method'=>'POST', 'autocomplete'=>'off'))!!}
 		{{Form::token()}}
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" placeholder="Nombre rol..">
 		</div>
 		<div class="form-group">
 			<label for="Nombre">Descripción</label>
 			<input type="text" name="Descripcion" class="form-control" placeholder="Descripción Rol..">
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary" type="submit">Guardar</button>
 			<button class="btn btn-danger" type="reset">Cancelar</button>
 		</div>

 		{!!Form::close()!!}
 	</div>
 </div>
@stop
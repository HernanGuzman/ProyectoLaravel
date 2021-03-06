@extends ('layouts.admin')

@section('contenido')
 <div class="row">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Nueva Divisíon</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif

 		{!!Form::open(array('url' => '/division', 'method'=>'POST', 'autocomplete'=>'off'))!!}
 		{{Form::token()}}
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" placeholder="Nombre divisíon..">
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary" type="submit">Guardar</button>
 			<button class="btn btn-danger" type="reset">Cancelar</button>
 		</div>

 		{!!Form::close()!!}
 	</div>
 </div>
@stop
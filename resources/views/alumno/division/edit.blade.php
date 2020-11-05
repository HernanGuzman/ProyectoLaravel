@extends ('layouts.admin')

@section('contenido')
 <div class="row">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Editar División: {{$division->Nombre}}</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif

 		{!!Form::model($division,['method' => 'PATCH', 'route'=>['division.update', $division->IdDivision]])!!}
 		{{Form::token()}}
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" value="{{$division->Nombre}}" placeholder="Nombre divisíon..">
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary" type="submit">Guardar</button>
 			<button class="btn btn-danger" type="reset">Cancelar</button>
 		</div>

 		{!!Form::close()!!}
 	</div>
 </div>
@stop
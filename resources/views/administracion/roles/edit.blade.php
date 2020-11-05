@extends ('layouts.admin')

@section('contenido')
 <div class="content">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Editar Rol: {{$rol->Nombre}}</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif

 		{!!Form::model($rol,['method' => 'PATCH', 'route'=>['roles.update', $rol->IdRol]])!!}
 		{{Form::token()}}
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" value="{{$rol->Nombre}}" placeholder="Nombre Rol..">
 		</div>
 		<div class="form-group">
 			<label for="Descripcion">Descripción</label>
 			<input type="text" name="Descripcion" class="form-control" value="{{$rol->Descripcion}}" placeholder="Descripción Rol..">
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary" type="submit">Guardar</button>
 			<button class="btn btn-danger" type="reset">Cancelar</button>
 		</div>

 		{!!Form::close()!!}
 	</div>
 </div>
@stop
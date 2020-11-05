@extends ('layouts.admin')

@section('contenido')
 <div class="content">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Editar Usuario: {{$usuario->Nombre}}</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif
 		
 		{!!Form::model($usuario,['method' => 'PATCH', 'route'=>['usuarios.update', $usuario->Idusuario]])!!}
 		{{Form::token()}}


 		
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" value="{{$usuario->Nombre}}" placeholder="Nombre usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Direccion">Dirección</label>
 			<input type="text" name="Direccion" class="form-control" value="{{$usuario->Direccion}}" placeholder="Dirección usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Telefono">Teléfono</label>
 			<input type="text" name="Telefono" class="form-control" value="{{$usuario->Telefono}}" placeholder="Teléfono usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Mail">Email</label>
 			<input type="text" name="Mail" class="form-control" value="{{$usuario->Mail}}" placeholder="Email usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="rol">Rol</label>
 			<select name="IdRol" id="IdRol" class="form-control" placeholder = "Seleccionar rol ...">
 				@foreach($roles as $rol)
 					$selected = '';
 					@if($usuario->IdRol == $rol->IdRol){
 						$selected = 'selected';
 					}
 					@endif
 				<option value="{{$rol->IdRol}}" selected = $selected>{{$rol->Nombre}}</option>
 				@endforeach
 				
 			</select>
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary" type="submit">Guardar</button>
 			<button class="btn btn-danger" type="reset">Cancelar</button>
 		</div>

 		{!!Form::close()!!}
 	</div>
 </div>
@stop
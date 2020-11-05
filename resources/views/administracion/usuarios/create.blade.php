@extends ('layouts.admin')

@section('contenido')
 <div class="content">
 	<div class="col-sm-8 col-xs-12">
 		<h3>Nuevo Usuario</h3>
 		@if (count($errors)>0)
 		<div class="alert alert-danger">
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif

 		{!!Form::open(array('url' => '/usuarios', 'method'=>'POST', 'autocomplete'=>'off'))!!}
 		{{Form::token()}}
 		
 		<div class="form-group">
 			<label for="Nombre">Nombre</label>
 			<input type="text" name="Nombre" class="form-control" placeholder="Nombre usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Direccion">Dirección</label>
 			<input type="text" name="Direccion" class="form-control" placeholder="Dirección usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Telefono">Teléfono</label>
 			<input type="text" name="Telefono" class="form-control" placeholder="Teléfono usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Mail">Email</label>
 			<input type="text" name="Mail" class="form-control" placeholder="Email usuario ...">
 		</div>
 		<div class="form-group">
 			<label for="Mail">Password</label>
 			<input type="password" name="Password" class="form-control" placeholder="Clave usuario ...">
 		</div>
 		

 		<div class="form-group">
 			<label for="rol">Rol</label>
 			<select name="IdRol" id="IdRol" class="form-control" placeholder = "Seleccionar rol ...">
 				<option value=""></option>
 				@foreach($roles as $rol)
 				<option value="{{$rol->IdRol}}">{{$rol->Nombre}}</option>
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
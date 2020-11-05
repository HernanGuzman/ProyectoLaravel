@extends ('layouts.admin')

@section('contenido')

<div class="content">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de usuarios <a href="/usuarios/create/"><button> Nuevo</button></a></h4>
		@include('administracion.usuarios.search')
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive"> 
			<table class="table table-striped table-bordered table-condensed table-hover text-center">
				<thead>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Mail</th>
					<th>Rol</th>
					<th>Opciones</th>
				</thead>
				@foreach($usuarios as $usu)
				<tr>
					<td>{{$usu->IdUsuario}}</td>
					<td>{{$usu->Nombre}}</td>
					<td>{{$usu->Mail}}</td>
					<td>{{$usu->NombreRol}}</td>
					
					
					<td>
					<a href="{{URL::action('UsuarioController@edit', $usu->IdUsuario)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$usu->IdUsuario}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				</td>
				</tr>
				@include('administracion.usuarios.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>

@stop
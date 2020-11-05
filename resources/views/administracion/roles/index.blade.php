@extends ('layouts.admin')

@section('contenido')

<div class="content">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de roles <a href="/roles/create/"><button> Nuevo</button></a></h4>
		@include('administracion.roles.search')
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive"> 
			<table class="table table-striped table-bordered table-condensed table-hover text-center">
				<thead>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach($roles as $rol)
				<tr>
					<td>{{$rol->IdRol}}</td>
					<td>{{$rol->Nombre}}</td>
					<td>
					<a href="{{URL::action('RolesController@edit', $rol->IdRol)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$rol->IdRol}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				</td>
				</tr>
				@include('administracion.roles.modal')
				@endforeach
			</table>
		</div>
		{{$roles->render()}}
	</div>
</div>

@stop
@extends ('layouts.admin')

@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de divisiones <a href="/division/create/"><button> Nuevo</button></a></h4>
		@include('alumno.division.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive"> 
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach($divisiones as $div)
				<tr>
					<td>{{$div->IdDivision}}</td>
					<td>{{$div->Nombre}}</td>
					<td>
					<a href="{{URL::action('DivisionController@edit', $div->IdDivision)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$div->IdDivision}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				</td>
				</tr>
				@include('alumno.division.modal')
				@endforeach
			</table>
		</div>
		{{$divisiones->render()}}
	</div>
</div>
@stop
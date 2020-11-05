</!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>Sistema de Inscripciones - Instituto Galileo Galilei</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/_all-skins.min.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<header class="main-header">
		<a href="http://www.galileo.edu.ar/" class="logo">
		<span class="logo-mini"><b>SG</b></span>
		<span class="logo-lg"><b>Sistema Galileo</b></span>
		</a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Navegación</span>
			</a>
			
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<small class="bg-red">Online</small>
						<span class="hidden-xs">{{session('Nombre')}}</span>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<p>Instituto Galileo Galilei - Soft de Inscripción</p>
								<small>http://www.galileo.edu.ar</small>
							</li>

							<li class="user-footer">
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">Cerrar</a>
								</div>
						
							</li>

						</ul>

					</li>

					
					
				</ul>
				
			</div>
		</nav>
		
	</header>

	<aside class="main-sidebar">
		<section class="sidebar">

			<ul class="sidebar-menu" data-widget="tree">
				<li class="header"></li>
				
				<li class="treeview">
					<a href="">
						<i class="fa fa-user"></i>
						<span>Alumnos</span>
						<i class= "fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="alumno/alumno"><i class="fa fa-circle-o"></i> Alumno</a></li>
						<li><a href="/division"><i class="fa fa-circle-o"></i> División</a></li>
					</ul>
					
				</li>
				
				
				@if(session('Rol') == '1')
					<li class="treeview">
					<a href="">
						<i class="fa fa-user"></i>
						<span>Profesores</span>
						<i class= "fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="inscripciones/alumnos"><i class="fa fa-circle-o"></i> Profesor</a></li>
						<li><a href="inscripciones/Division"><i class="fa fa-circle-o"></i> Curso</a></li>
					</ul>
					
				</li>
				@endif
				@if(session('Rol') == '1')
				<li class="treeview">
					<a href="">
						<i class="fa fa-user"></i>
						<span>Administración</span>
						<i class= "fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="/roles"><i class="fa fa-circle-o"></i> Roles</a></li>
						<li><a href="/usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
					</ul>
					
				</li>
				@endif
				<li class="treeview">
					<a href="">
						<i class="fa fa-user"></i>
						<span>Cerrar Sesión</span>
						<i class= "fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="/cerrarSesion"><i class="fa fa-circle-o"></i> Cerrar Sesión</a></li>
						
					</ul>
					
				</li>
				
			</ul>
			
		</section>
		
	</aside>

	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header width-border">
							<h3 class="box-title"></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

							</div>
						</div>

						<div class="box-body">
							<div class="row">
								<div class="col-md-12"></div>
								@yield('contenido')
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			
		</section>
		
	</div>

	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Versión 1.0.0</b>
		</div>
		<strong> Copyright &copy; 2020-2021 <a href="http://www.galileo.edu.ar">Instituto Galileo Galilei</a></strong> All rights reserved.
		
	</footer>



<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
</body>
</html>
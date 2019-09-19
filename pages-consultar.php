<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Consultar</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
			
			<!-- start: search & user box -->
			<div class="header-right">
				<span class="separator"></span>
				
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						
						<div class="profile-info" >
							<span class="name">Nombre</span>
							<span class="role">Rol</span>
						</div>
						
						<i class="fa custom-caret"></i>
					</a>
					
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="http://localhost/veterinaria/pages-signin.php"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
				
				<div class="sidebar-header">
					
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
							<ul class="nav nav-main">
								<li >
									<a href="index.html">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Inicio</span>
									</a>
								</li>
								<li >
									<a href="http://localhost/veterinaria/pages-user-profile.php">
										<i class="fa fa-copy" aria-hidden="true"></i>
										<span>Registrar M&eacute;dico</span>
									</a>
								</li>
								<li class="nav-parent">
									<a>
										<i class="fa fa-paw" aria-hidden="true"></i>
										<span>Registrar Paciente</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="http://localhost/veterinaria/regis-info-personal.php">
												Informaci&oacute;n personal
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-reflejo.php">
												Reflejo 
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-globoo.php">
												Globo ocular
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-parpado.php">
												P&aacute;rpados
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-conjuntiva.php">
												Conjuntiva
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-corneacamara.php">
												C&oacute;rnea y C&aacute;mara anterior
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-irispupila.php">
												Iris y Pupila
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-lente.php">
												Lente
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-fondovitreo.php">
												Fondo y Vitreo
											</a>
										</li>
										<li>
											<a href="http://localhost/veterinaria/regis-diagnostico.php">
												Diagnosticos 
											</a>
										</li>
									</ul>
									<li class="nav-active">
										<a href="http://localhost/veterinaria/pages-consultar.php">
											<i class="fa fa-search" aria-hidden="true"></i>
											<span>Consultar</span>
										</a>
									</li>
									<li >
										<a href="http://localhost/veterinaria/pages-estadisticas.php">
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Estadisticas</span>
										</a>
									</li>
									<li >
										<a href="http://localhost/veterinaria/pages-reportes.php">
											<i class="fa fa-check" aria-hidden="true"></i>
											<span>Reportes</span>
										</a>
									</li>
								</li>
							</ul>
						</nav>
						
						<hr class="separator" />
						
						
						
						<hr class="separator" />
						
						
					</div>
					
				</div>
				
			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Consultar</h2>
					
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="index.html">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Consultar</span></li>
						</ol>
						<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!-- start: page -->
				
				<!-- globo ocular -->
				<div class="row">
					<!--reporte-->
					<div class="col-md-12">
						<form id="frmajax" class="form-horizontal">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Consultar</h2>
									<p class="panel-subtitle">
										Buscar paciente.
									</p>
								</header>
								<div class="panel-body">
									<div class="form-group">
										<label class="col-sm-3 control-label">C&eacute;dula de cuidadan&iacute;a:</label>
										<div class="col-sm-3">
											<input type="text" name="duenumerodoc" id="nameCedulaPaciente" class="form-control" />
										</div>
										<div class="col-sm-3">
											<input value="Consultar" id="consultarPaciente" class="btn btn-primary" type="submit">
										</div>
									</div>

								</div>
							</section>
							<div id="mensaje" ></div>
						</form>
					</div>
					<!--end reporte-->

					

					
				</div>

				<!-- end: page -->
			</section>
		</div>

	</section>

	<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>
	
	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>
	
	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>

</body>
</html>

<script type="text/javascript">

	/*****************************AJAX PARA VISUALIZAR PACIENTE*****************************************************/

	$(document).ready(function () {
		$('#consultarPaciente').click(function () {
			var datos = $('#frmajax').serialize();
			var cedula = $('#nameCedulaPaciente').val();
			var bandera=5;
			
			if (cedula == "") {
				alert("* Faltan campos por digitar *");
			} else {
				
				$.ajax({
					type: "POST",
					url: "http://localhost/veterinaria/consultar.php",
					data:datos + '&bandera=' + bandera,
					
				}).done( function( info ){
					$("#mensaje").html( info ); // DIV DONDE SE VISUALIZA EL MSJ
				});				
				
			}
			return false;
		});
		
	});

</script>
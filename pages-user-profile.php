<?php
session_start();

if($_SESSION['id_user'] != "activo"){

	echo"<script>location.href ='http://localhost/veterinaria/pages-signin.php'</script>";
}else{
	
	?>
	<!doctype html>
	<html class="fixed">
	<head>

		<!-- Basic -->
		<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2.min.css">
		<script type="text/javascript" src="sweetalert/sweetalert2.min.js" ></script>
		<meta charset="UTF-8">

		<title>Registrar M&eacute;dico</title>
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
		<script  language="JavaScript" src="funcionesJS.js" ></script>


	</head>
	<body>
		<?php
		include "visualizar.php";
		?>
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
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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


				<!---------------------------------------------- PALETA LATERAL DE MENU ---------------------------------------------->

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
										<a href="http://localhost/veterinaria/index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Inicio</span>
										</a>
									</li>
									<li class="nav-active">
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
											<div id="registrar-historia" style="display: none">
												
											<li >
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Reflejo 
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Globo ocular
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													P&aacute;rpados
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Conjuntiva
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													C&oacute;rnea y C&aacute;mara anterior
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Iris y Pupila
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Lente
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Fondo y Vitreo
												</a>
											</li>
											<li>
												<a href="http://localhost/veterinaria/registrar-historia.php">
													Diagnosticos 
												</a>
											</li>
											</div>
										</ul>
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
				<!---------------------------------------------- FINAL PALETA LATERAL DE MENU ---------------------------------------------->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Registrar m&eacute;dico</h2>
						
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="http://localhost/veterinaria/index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Registrar M&eacute;dico</span></li>
								<li><span>Registro nuevo</span></li>
							</ol>
							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<!---------------------------------------------- REGISTRAR MEDICO ---------------------------------------------->
					<div class="row">

						<div class=".col-md-12">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Nuevo m&eacute;dico</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										<h4 class="mb-md">Personal Information</h4>
										<form id="frmajax" method="post">

											<fieldset>
												<!---------------------------------------------- INPUT NOMBRE ----------------------------->
												<div class="form-group" >

													<label class="col-md-3 control-label" for="profileFirstName" >Nombre Completo</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="nombre" name="nombre" >
													</div>
												</div>
												<!---------------------------------------------- INPUT TIPO DE DOCUMENTO ---------------------->
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Tipo Documento</label>
													<div class="col-md-8">
														<?php
														mostrarCedula();
														?>

													</div>
												</div>
												<!---------------------------------------------- INPUT NUMERO DE CEDULA  ------------------->
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName" >N&uacute;mero Documento</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="documento" name="documento" onKeyPress="return soloNumeros(event)">
													</div>
												</div>
												<!---------------------------------------------- INPUT TELEFONO  ----------------------------->
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Tel&eacute;fono</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="telefono" name="telefono" onKeyPress="return soloNumeros(event)">
													</div>
												</div>
											</fieldset>

											<br><br><br>
											<div id="mensaje" ></div> 	<!-- Mensaje ' medico ya registrado '  --->	

											<!---------------------------------------------- BOTON GUARDAR  ----------------------------->								 
											<div class="col-md-12">							
												<footer class="panel-footer">
													<div class="row">
														<div class="col-md-12 ">
															<ul class="pager"><li class="next" >
																<input value="Guardar" id="insertarDatos" class="btn btn-primary" type="button" onclick="saveMedico();">
															</li>
														</ul>												
													</div>	
												</div>
											</footer>
										</div>

									</form>
									<!---------------------------------------------- FIN DE FORMULARIO  ----------------------------->											
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- end: page -->

				<!---------------------------------------------- FIN REGISTRAR MEDICO ---------------------------------------------->
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

	<!-- Specific Page Vendor -->
	<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>

</body>
</html>

<?php }

?>
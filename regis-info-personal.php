<?php
session_start();

if($_SESSION['id_user'] != "activo"){

	echo"<script>location.href ='http://localhost/veterinaria/pages-signin.php'</script>";
}else{
	
	?>
	<!doctype html>
	<html class="fixed">

	<head>

		<!-- <script src="https://code.jquery.com/jquery.js"></script>-->

		<!-- Basic -->
		<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2.min.css">
		<script type="text/javascript" src="sweetalert/sweetalert2.min.js" ></script>

		<meta charset="UTF-8">

		<title>Registro Paciente/Info</title>
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
									<li >
										<a href="http://localhost/veterinaria/pages-user-profile.php">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Registrar M&eacute;dico</span>
										</a>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-paw" aria-hidden="true"></i>
											<span>Registrar Paciente</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-active">
												<a href="http://localhost/veterinaria/regis-info-personal.php">
													Informaci&oacute;n personal
												</a>
											</li>
											
												
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
						<h2>Informaci&oacute;n personal</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="http://localhost/veterinaria/index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Registrar paciente</span></li>
								<li><span>Informaci&oacute;n personal</span></li>
							</ol>

							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<!----------------------------------------------------------------------------------------------->

					<!-- justified -->
					<div class="row">
						<div class="col-md-12">
							<div class="tabs">
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a href="#popular10" data-toggle="tab" class="text-center"> Propietario</a>
									</li>
									<li>
										<a href="#recent10" data-toggle="tab" class="text-center">Canino</a>
									</li>
									<li>
										<a href="#medico" data-toggle="tab" class="text-center">M&eacute;dico</a>
									</li>
								</ul>

								<div class="tab-content">

									<!------------------- REGISTRAR PROPIETARIO -------------------->

									<div id="popular10" class="tab-pane active">
										<form id="frmajax" method="post">
											<fieldset>	
												<!--ESPACIO PARA MOSTRAR EL NUMERO DE HISTORIA CLINICA-->
												<?php
												mostrarNumeroHistoriaClinica();
												?>

												<!------------------------------------- INPUT Numero de documento ----------------------------->
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">N&uacute;mero Documento</label>

													<!---------------------------------------------- Boton Validar ----------------------------->
													<input value="Validar" id="submitPropietario" type="button" class="btn btn-primary" onclick="validarPropietario();">
													<div class="col-md-3">
														<input type="text" class="form-control" id="duenumerodoc" name="duenumerodoc" onKeyPress="return soloNumeros(event)" >
													</div>
												</div>		
											</fieldset>
											<div id="registrarPropietario" ></div>
										</form>
									</div>

									<!------------------- REGISTRAR MASCOTA -------------------->

									<div id="recent10" class="tab-pane">
										<form id="frmajax2" method="post">
											<fieldset>

												<!--ESPACIO PARA MOSTRAR EL NUMERO DE HISTORIA CLINICA-->
												<?php
												mostrarNumeroHistoriaClinica();
												?>

												<!--ESPACIO PARA MOSTRAR EL ID DE LA MASCOTA-->
												<?php
												mostrarIdMascota();
												?>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">N&uacute;mero Documento de Propietario</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="duenumerodocMascota" name="duenumerodocMascota" readonly='readonly'>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre Completo</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="masconombre" name="masconombre">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Fecha de nacimiento</label>
													<div class="col-md-8">
														<input type="date" class="form-control" id="masnacio" name="masnacio">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Sexo</label>
													<div class="col-md-8">
														<?php
														mostrarSexo();
														?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Especie</label>
													<div class="col-md-8">
														<?php
														mostrarEspecie();
														?>

													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Raza</label>
													<div class="col-md-8">
														<?php
														mostrarRaza();
														?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Motivo consulta</label>
													<div class="col-md-8">
														<textarea id="motivoConsulta" name="motivoConsulta" class="form-control"></textarea>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12 ">
														<ul class="pager"><li class="next" >
															<input value="Guardar" id="submitMascota" class="btn btn-primary" type="button" onclick="saveMascota();">
														</ul>
													</div>
												</div>
												<div id="mensaje2" ></div>	
											</fieldset>
										</form>
									</div>

									<!------------------- REGISTRAR MEDICO -------------------->

									<div id="medico" class="tab-pane">
										<form id="frmajax3" method="post">
											<fieldset>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Fecha</label>
													<div class="col-md-2">
														<input type="datetime" class="form-control" name="fecha" id="fecha" value="<?php date_default_timezone_set('America/Bogota'); echo date("Y/m/d");?>" readonly='readonly'>
													</div>
												</div>


												<!--ESPACIO PARA MOSTRAR EL NUMERO DE HISTORIA CLINICA-->
												<?php
												mostrarNumeroHistoriaClinica();
												?>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">ID mascota</label>
													<div class="col-md-2">
														<input type="text" class="form-control" id="idMascota" name="idMascota" readonly='readonly'>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">N&uacute;mero Documento de Propietario</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="duenumerodocMedico" name="duenumerodocMedico" readonly='readonly'>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">N&uacute;mero Documento de Medico</label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="CedulaMedico" id="CedulaMedico" class="form-control" onKeyPress="return soloNumeros(event)">
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12 ">
														<br>
														<input value="Terminar Historia Clinica" id="consultarMedico" class="btn btn-primary" type="button" onclick="terminarHistoriaClinica();">												
													</div>
												</div>

												<div id="datosMedico" ></div>
												<div id="resultado"></div>
											</fieldset>
										</form>
									</div>

									<!------------------------------------------------------->

								</div>
							</div>
						</div>
					</div>
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
<?php }

?>

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
											<li>
												<a href="http://localhost/veterinaria/regis-info-personal.php">
													Informaci&oacute;n personal
												</a>
											</li>
											<li class="nav-active" id="li1">
												<a href="#reflejo" data-toggle="tab"  onclick="li1();">Reflejo</a>
											</li>
											<li id="li2">
												<a href="#globo" data-toggle="tab" onclick="li2();">Globo ocular</a>
											</li>
											<li id="li3">
												<a href="#parpados" data-toggle="tab" onclick="li3();">P&aacute;rpados</a>
											</li>
											<li id="li4">
												<a href="#conjuntiva" data-toggle="tab" onclick="li4();">Conjuntiva</a>
											</li>
											<li id="li5">
												<a href="#cornea" data-toggle="tab" onclick="li5();">C&oacute;rnea y C&aacute;mara anterior C&aacute;mar</a>
											</li>
											<li id="li6">
												<a href="#iris" data-toggle="tab" onclick="li6();">Iris y Pupila</a>
											</li>
											<li id="li7">
												<a href="#lente" data-toggle="tab" onclick="li7();">Lente</a>
											</li>
											<li id="li8">
												<a href="#fondo" data-toggle="tab" onclick="li8();">Fondo y Vitreo</a>
											</li>
											<li id="li9">
												<a href="#diagnosticos" data-toggle="tab" onclick="li9();">Diagnosticos</a>
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

								<div class="tab-content">

									<!------------------- REFLEJO -------------------->

									<div id="reflejo" class="tab-pane active">

										<header class="page-header">
											<h2>Reflejo</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Reflejo </span></li>
												</ol>
												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>
										<?php
										mostrarNumeroHistoriaClinica1();
										?>

										<form id="frmajax" class="form-horizontal" method="post">
											<div class="row">

												<!--ojo derecho-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Derecho</h2>
															<p class="panel-subtitle">
																REFLEJO
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Reflejo de amenaza:</label>
																<div class="col-sm-3">
																	<?php
																	mostrarRadiod();
																	?>
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Reflejo pupilar:</label>
																<div class="col-sm-3">
																	<label class="col-sm-3 ">Directo:</label>
																	<div class="col-sm-9">
																		<?php
																		mostrarRpupilardd();
																		?>

																	</div>	
																</div>
																<div class="col-sm-3">
																	<label class="col-sm-3 ">Indirecto:</label>
																	<div class="col-sm-9">
																		<?php
																		mostrarRpupilarid();
																		?>
																	</div>	
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Schirmer:</label>
																<div class="col-sm-3">
																	<input type="text" name="schirmerd" id="schirmerd" class="form-control" onKeyPress="return soloNumeros(event)"/>
																</div>
																<label class="col-sm-3 control-label">mm/min</label>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Cultivo:</label>
																<div class="col-sm-3">
																	<?php
																	mostrarCultivod();
																	?>
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Presi&oacute;n intraocular:</label>
																<div class="col-sm-3">
																	<input type="text" name="presionInd" id="presionInd" class="form-control" onKeyPress="return soloNumeros(event)"/>
																</div>
																<label class="col-sm-3 control-label">mm/Hg</label>
															</div>
														</div>
													</section>

												</div>
												<!--end ojo derecho-->



												<!--ojo izquierdo-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Izquierdo</h2>
															<p class="panel-subtitle">
																REFLEJO
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Reflejo de amenaza:</label>
																<div class="col-sm-3">
																	<?php
																	mostrarRadioi();
																	?>
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Reflejo pupilar:</label>
																<div class="col-sm-3">
																	<label class="col-sm-3 ">Directo:</label>
																	<div class="col-sm-9">
																		<?php
																		mostrarRpupilardi();
																		?>

																	</div>	
																</div>
																<div class="col-sm-3">
																	<label class="col-sm-3 ">Indirecto:</label>
																	<div class="col-sm-9">
																		<?php
																		mostrarRpupilarii();
																		?>
																	</div>	
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Schirmer:</label>
																<div class="col-sm-3">
																	<input type="text" name="schirmeri" id="schirmeri" class="form-control" onKeyPress="return soloNumeros(event)"/>
																</div>
																<label class="col-sm-3 control-label">mm/min</label>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Cultivo:</label>
																<div class="col-sm-3">
																	<?php
																	mostrarCultivoi();
																	?>
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Presi&oacute;n intraocular:</label>
																<div class="col-sm-3">
																	<input type="text" name="presionIni" id="presionIni" class="form-control" onKeyPress="return soloNumeros(event)"/>
																</div>
																<label class="col-sm-3 control-label">mm/Hg</label>
															</div>
														</div>
													</section>

												</div>

												<!--end ojo izquierdo-->

												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">			

																	<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextReflejo();">
																</ul>
															</div>
														</div>
													</footer>
												</div>
											</div>
										</form>
									</div>


									<!------------------- GLOBO OCULAR -------------------->

									<div id="globo" class="tab-pane">

										<header class="page-header">
											<h2>Globo Ocular</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Globo </span></li>
												</ol>
												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>

										<?php
										mostrarNumeroHistoriaClinica1();
										?>
										<form id="frmajax"  class="form-horizontal" method="post">
											<div class="row">
												<!--ojo derecho-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Derecho</h2>
															<p class="panel-subtitle">
																GLOBO OCULAR
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<div class="col-sm-3">
																	<?php
																	mostrarRglobod();
																	?>
																</div>
															</div>

														</section>

													</div>
													<!--end ojo derecho-->

													<!--ojo izquierdo-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Izquierdo</h2>
																<p class="panel-subtitle">
																	GLOBO OCULAR
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-sm-3">
																		<?php
																		mostrarRgloboi();
																		?>
																	</div>
																</div>
															</div>
														</section>

													</div>
													<!--end ojo izquierdo-->

													<!--footer-->
													<div class="col-md-12">
														<footer class="panel-footer">
															<div class="row">
																<div class="col-md-12 ">
																	<ul class="pager">
																		<li class="previous " >
																			<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorGlobo();">	
																		</li>
																		<li class="next" >
																			<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextGlobo();">
																		</li>
																	</ul>
																</div>
															</div>
														</footer>
													</div>
												</div>
											</form>
										</div>

										<!------------------- PARPADOS -------------------->

										<div id="parpados" class="tab-pane">

											<header class="page-header">
												<h2>P&aacute;rpado</h2>

												<div class="right-wrapper pull-right">
													<ol class="breadcrumbs">
														<li>
															<a href="index.html">
																<i class="fa fa-home"></i>
															</a>
														</li>
														<li><span>Registrar paciente</span></li>
														<li><span>P&aacute;rpados</span></li>
													</ol>

													<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
												</div>
											</header>
											<?php
											mostrarNumeroHistoriaClinica1();
											?>

											<form id="frmajax"  class="form-horizontal" method="post">
												<div class="row">
													<!--ojo derecho-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Derecho</h2>
																<p class="panel-subtitle">
																	P&Aacute;RPADO
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRparpadod();
																		?>
																	</div>
																</div>

															</div>
														</section>

														<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_parpado_derecho.html"></iframe>
													</div>

													</div>
													<!--end ojo derecho-->

													<!--ojo izquierdo-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Izquierdo</h2>
																<p class="panel-subtitle">
																	P&Aacute;RPADO
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRparpadoi();
																		?>
																	</div>
																</div>

															</div>
														</section>
														<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_parpado_izquierdo.html"></iframe>
													</div>

													</div>
													<!--end ojo izquierdo-->

													<!--footer-->
													<div class="col-md-12">
														<footer class="panel-footer">
															<div class="row">
																<div class="col-md-12 ">
																	<ul class="pager">
																		<li class="previous " >
																			<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorParpado();">
																		</li>
																		<li class="next" >
																			<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextParpado();">
																		</li>
																	</ul>
																</div>
															</div>
														</footer>
													</div>

												</div>
											</form>
										</div>



										<!------------------- CONJUNTIVA -------------------->
										<div id="conjuntiva" class="tab-pane">

											<header class="page-header">
												<h2>Conjuntiva</h2>

												<div class="right-wrapper pull-right">
													<ol class="breadcrumbs">
														<li>
															<a href="index.html">
																<i class="fa fa-home"></i>
															</a>
														</li>
														<li><span>Registrar paciente</span></li>
														<li><span>Conjuntiva</span></li>
													</ol>

													<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
												</div>
											</header>

											<?php
											mostrarNumeroHistoriaClinica1();
											?>

											<form id="frmajax"  class="form-horizontal" method="post">
												<div class="row">
													<!--ojo derecho-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Derecho</h2>
																<p class="panel-subtitle">
																	CONJUNTIVA
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRconjuntipd();
																		?>
																	</div>
																</div>

																<label class="col-sm-6 control-label"><h5>Tercer P&aacute;rpado</h5></label>
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRconjunparpd()	
																		?>
																	</div>

																</div>


															</div>
														</section>

													</div>
													<!--end ojo derecho-->

													<!--ojo izquierdo-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Derecho</h2>
																<p class="panel-subtitle">
																	CONJUNTIVA
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRconjuntipi();
																		?>
																	</div>
																</div>

																<label class="col-sm-6 control-label"><h5>Tercer P&aacute;rpado</h5></label>
																<div class="form-group">
																	<div class="col-sm-12">
																		<?php
																		mostrarRconjunparpi()	
																		?>
																	</div>

																</div>


															</div>
														</section>

													</div>
													<!--end ojo izquierdo-->

													<!--footer-->
													<div class="col-md-12">
														<footer class="panel-footer">
															<div class="row">
																<div class="col-md-12 ">
																	<ul class="pager">
																		<li class="previous " >
																			<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorConjuntiva();">
																		</li>
																		<li class="next" >
																			<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextConjuntiva();">

																		</li>
																	</ul>
																</div>
															</div>
														</footer>
													</div>

												</div>
											</form>

										</div>


										<!------------------- CORNEA -------------------->
										<div id="cornea" class="tab-pane">
											<header class="page-header">
												<h2>C&oacute;rnea y C&aacute;mara anterior</h2>

												<div class="right-wrapper pull-right">
													<ol class="breadcrumbs">
														<li>
															<a href="index.html">
																<i class="fa fa-home"></i>
															</a>
														</li>
														<li><span>Registrar paciente</span></li>
														<li><span>C&oacute;rnea y C&aacute;mara</span></li>
													</ol>

													<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
												</div>
											</header>

											<?php
											mostrarNumeroHistoriaClinica1();
											?>
											<form id="frmajax"  class="form-horizontal" method="post">
												<div class="row">
													<!--ojo derecho-->
													<div class="col-md-6">

														<section class="panel">
															<header class="panel-heading">

																<h2 class="panel-title">Ojo Derecho</h2>
																<p class="panel-subtitle">
																	C&Oacute;RNEA Y C&Aacute;MARA
																</p>
															</header>
															<div class="panel-body">
																<div class="form-group">
																	<label class="col-sm-3 control-label">Test de fluoresce&iacute;na:</label>

																	<?php
																	mostrarRadiotd();
																	?>	

																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Test de rosa de bengala:</label>

																	<?php
																	mostrarRadiobd();
																	?>	

																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Gonioscopia:</label>
																	<div class="col-sm-3">
																		<input type="text" name="gonioscopiad" id="gonioscopiad" class="form-control"/>
																	</div>
																	<label class="col-sm-3 control-label">mm/min</label>
																</div>
																<div class="form-group">
																	<div class="col-sm-6">
																		<?php
																	mostrarselectcord();//select multiple
																	?>
																</div>
															</div>
														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_cornea_derecho.html"></iframe>
													</div>

												</div>
												<!--end ojo derecho-->

												<!--ojo izquierdo-->
												<div class="col-md-6">
													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Izquierdo</h2>
															<p class="panel-subtitle">
																C&Oacute;RNEA Y C&Aacute;MARA
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Test de fluoresce&iacute;na:</label>

																<?php
																mostrarRadioti();
																?>	

															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Test de rosa de bengala:</label>

																<?php
																mostrarRadiobi();
																?>	

															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Gonioscopia:</label>
																<div class="col-sm-3">
																	<input type="text" name="gonioscopiai" id="gonioscopiai" class="form-control"/>
																</div>
																<label class="col-sm-3 control-label">mm/min</label>
															</div>
															<div class="form-group">
																<div class="col-sm-6">
																	<?php
																	mostrarselectcori();//select multiple
																	?>
																</div>
															</div>

														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_cornea_izquierdo.html"></iframe>
													</div>

												</div>
												<!--end ojo izquierdo-->

												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">
																	<li class="previous " >
																		<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorCornea();">
																	</li>
																	<li class="next" >
																		<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextCornea();">

																	</li>
																</ul>
															</div>
														</div>
													</footer>
												</div>
											</div>
										</form>
									</div>

									<!------------------- IRIS -------------------->
									<div id="iris" class="tab-pane">
										<header class="page-header">
											<h2>Iris y Pupila</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Iris y Pupila</span></li>
												</ol>

												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>

										<!-- start: page -->

										<!-- globo ocular -->
										<?php
										mostrarNumeroHistoriaClinica1();
										?>

										<form id="frmajax"  class="form-horizontal" method="post">
											<div class="row">
												<!--ojo derecho-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Derecho</h2>
															<p class="panel-subtitle">
																IRIS Y PUPILA
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Sinequia:</label>
																<?php
																mostrarsinequiad();
																?>
															</div>
															<div class="form-group">
																<div class="col-sm-12">
																	<?php
																	mostrarselectirisd();//select multiple
																	?>
																</div>
															</div>

														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_iris_derecho.html"></iframe>
													</div>

												</div>
												<!--end ojo derecho-->

												<!--ojo izquierdo-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Izquierdo</h2>
															<p class="panel-subtitle">
																IRIS Y PUPILA
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Sinequia:</label>
																<?php
																mostrarsinequiai();
																?>
															</div>
															<div class="form-group">
																<div class="col-sm-12">
																	<?php
																	mostrarselectirisi();//select multiple
																	?>
																</div>
															</div>

														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_iris_izquierdo.html"></iframe>
													</div>

												</div>
												<!--end ojo izquierdo-->

												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">
																	<li class="previous " >
																		<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorIris();">
																	</li>
																	<li class="next" >
																		<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextIris();">
																	</li>
																</ul>
															</div>
														</div>
													</footer>
												</div>
											</div>
										</form>
									</div>

									<!------------------- LENTE -------------------->
									<div id="lente" class="tab-pane">

										<header class="page-header">
											<h2>Lente</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Lente</span></li>
												</ol>

												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>

										<!-- start: page -->

										<!--  lente -->
										<?php
										mostrarNumeroHistoriaClinica1();
										?>
										<form id="frmajax"  class="form-horizontal" method="post">
											<div class="row">
												<!--ojo derecho-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Derecho</h2>
															<p class="panel-subtitle">
																LENTE
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<?php
																mostrarlented();
																?>
															</div>
														</div>
													</section>
													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_lente_derecho.html"></iframe>
													</div>

												</div>
												<!--end ojo derecho-->

												<!--ojo izquierdo-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Izquierdo</h2>
															<p class="panel-subtitle">
																LENTE
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<?php
																mostrarlentei();


																?>
															</div>
														</div>
													</section>
													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_lente_izquierdo.html"></iframe>
													</div>

												</div>
												<!--end ojo izquierdo-->

												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">
																	<li class="previous " >
																		<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorLente();">	
																	</li>
																	<li class="next" >
																		<input value="Siguiente" id="submitReflejo" class="btn btn-primary" type="button" onclick="nextLente();">

																	</li>
																</ul>
															</div>
														</div>
													</footer>
												</div>
											</div>
										</form>

									</div>

									<!------------------- FONDO -------------------->
									<div id="fondo" class="tab-pane">

										<header class="page-header">
											<h2>Fondo y Vitreo</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Fondo y vitreo</span></li>
												</ol>

												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>

										<!-- start: page -->

										<!-- fondo vitreo -->
										<?php
										mostrarNumeroHistoriaClinica1();
										?>
										<form id="frmajax"  class="form-horizontal" method="post">
											<div class="row">
												<!--ojo derecho-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Derecho</h2>
															<p class="panel-subtitle">
																FONDO Y VITREO
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<div class="col-sm-6">

																	<?php
																	mostrarfondod();

																	?>

																</div>
															</div>
														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_fondo_derecho.html"></iframe>
													</div>

												</div>
												<!--end ojo derecho-->

												<!--ojo izquierdo-->
												<div class="col-md-6">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">Ojo Izquierdo</h2>
															<p class="panel-subtitle">
																FONDO Y VITREO
															</p>
														</header>
														<div class="panel-body">
															<div class="form-group">
																<div class="col-sm-6">

																	<?php
																	mostrarfondoi();

																	?>

																</div>
															</div>
														</div>
													</section>

													<br><br><br>
													<div>
														<iframe width="400" height="250"  src="http://localhost/veterinaria/img_fondo_izquierdo.html"></iframe>
													</div>

												</div>
												<!--end ojo izquierdo-->
												
												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">
																	<li class="previous " >
																		<input value="Anterior" id="submitReflejo" class="btn btn-primary" type="button" onclick="anteriorFondo();">	
																	</li>
																	<li class="next" >
																		<input value="Finalizar Registro" id="final" class="btn btn-primary" type="button" style="background:red" onclick="saveOjo();">

																	</li>
																	
																</ul>
															</div>
														</div>
													</footer>
												</div>

											</div>
										</form>

									</div>


									<!------------------- DIAGNOSTICOS -------------------->
									<div id="diagnosticos" class="tab-pane">

										<header class="page-header">
											<h2>Diagnostico</h2>

											<div class="right-wrapper pull-right">
												<ol class="breadcrumbs">
													<li>
														<a href="index.html">
															<i class="fa fa-home"></i>
														</a>
													</li>
													<li><span>Registrar paciente</span></li>
													<li><span>Diagnostico</span></li>
												</ol>
												<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
											</div>
										</header>

										<!-- start: page -->

										<!-- Diagnostico -->
										<?php
										mostrarNumeroHistoriaClinica1();
										?>
										<form id="frmajaxDiagnostico" class="form-horizontal" method="post">
											<div class="row">
												<!--diagnostico-->
												<div class="col-md-12">

													<section class="panel">
														<header class="panel-heading">

															<h2 class="panel-title">DIAGNOSTICO</h2>

														</header>
														<div class="panel-body">
															<div class="form-group">
																<label class="col-sm-3 control-label">Diagn&oacute;sticos diferenciales </label>
																<div class="col-sm-9">
																	<textarea name="diferenciales"  id="diferenciales" rows="5" class="form-control" ></textarea>
																</div>
															</div>

															<div class="form-group">
																<label class="col-sm-3 control-label">Ex&aacute;menes complementarios </label>

																<?php
																mostrardiagnostico();
																?>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Diagn&oacute;stico final:</label>
																<div class="col-sm-3">
																	<input type="text" name="diagnostico" id="diagnostico" class="form-control"/>
																</div>
															</div>


															<div class="form-group">
																<label class="col-sm-3 control-label">Tratamiento</label>
																<div class="col-sm-9">
																	<textarea name="tratamiento" id="tratamiento" rows="5" class="form-control" ></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Observaciones</label>
																<div class="col-sm-9">
																	<textarea name="observaciones" id="observaciones" rows="5" class="form-control" ></textarea>
																</div>
															</div>
															
														</div>


													</section>


												</div>
												<!--end diagnostico-->


												<!--footer-->
												<div class="col-md-12">
													<footer class="panel-footer">
														<div class="row">
															<div class="col-md-12 ">
																<ul class="pager">
																	<li class="next" >
																		<input value="Guardar" id="submitDiagnostico" class="btn btn-primary" type="button" onclick="saveDiagnostico();">

																	</li>
																</ul>
															</div>
														</div>
													</footer>
												</div>
											</div>
										</form>

									</div>
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

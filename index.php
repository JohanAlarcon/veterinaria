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
		<meta charset="UTF-8">

		<title>Nombre del proyecto</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

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
									<li class="nav-active">
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

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Inicio</h2>
						
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="http://localhost/veterinaria/index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Inicio</span></li>
							</ol>
							
							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a> 
						</div>
					</header>

					

					<!-- start: page -->
					<div class="row">
						<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Registrar M&eacute;dico:</h2>
									<p class="panel-subtitle">Podras ingresar un m&eacute;dico nuevo. </p>
									<li class="next" >
										<a href="http://localhost/veterinaria/pages-user-profile.php">Ir</a>
									</li>
								</header>
								
							</section>
						</div>
						<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Registrar historia clinica:</h2>
									<p class="panel-subtitle">ingresar un nuevo paciente.</p>
									<li class="next" >
										<a href="http://localhost/veterinaria/regis-info-personal.php">Ir</a>
									</li>
								</header>
								
							</section>
						</div>
						<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Estadisticas</h2>
									<p class="panel-subtitle">....</p>
									<li class="next" >
										<a href="http://localhost/veterinaria/pages-estadisticas.php">Ir</a>
									</li>
								</header>
								
							</section>
						</div>
						<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Reportes</h2>
									<p class="panel-subtitle">.....</p>
									<li class="next" >
										<a href="http://localhost/veterinaria/pages-reportes.php">Ir</a>
									</li>
								</header>
								
							</section>
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
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
	</html>

<?php }

?>
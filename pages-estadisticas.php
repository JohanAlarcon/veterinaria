
<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2.min.css">
	<script type="text/javascript" src="sweetalert/sweetalert2.min.js" ></script>
	<meta charset="UTF-8">

	<title>Estadisticas</title>
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
									<li class="nav-active">
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
					<h2>Estadisticas</h2>
					
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="http://localhost/veterinaria/index.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Estadisticas</span></li>
							
						</ol>
						<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!-- start: page -->
				
				<!-- globo ocular -->
				<div class="row">
					<!--estadisticas-->
					<div class="col-md-12">
						<form id="frmajax2" method="post">
							<section class="panel">
								<header class="panel-heading">
									
									<h2 class="panel-title">Estadisticas</h2>
								</header>
								<div class="panel-body">
									<div class="form-group">
										<div class="col-sm-6">
											<div class="radio-custom radio-primary">
												<input id="reflejo" name="buscador" type="radio" value="reflejo"  />
												<label for="reflejo">Reflejo</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="globo" name="buscador" type="radio" value="globo"  />
												<label for="globo">Globo Ocular</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="parpados" name="buscador" type="radio" value="parpados"  />
												<label for="parpados">P&aacute;rpados</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="conjuntiva" name="buscador" type="radio" value="conjuntiva"  />
												<label for="conjuntiva">Conjuntiva</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="cornea" name="buscador" type="radio" value="cornea"  />
												<label for="cornea">C&oacute;rnea y c&aacute;mara anterior</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="iris" name="buscador" type="radio" value="iris"  />
												<label for="iris">Iris y pupila</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="lente" name="buscador" type="radio" value="lente"  />
												<label for="lente">Lente</label>
											</div>
											<div class="radio-custom radio-primary">
												<input id="fondo" name="buscador" type="radio" value="fondo"  />
												<label for="fondo">Fondo y vitreo</label>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12 ">
												<ul class="pager"><li class="next" >
													<input value="Probar" id="submitEstadisticas" class="btn btn-primary" type="button" onclick="mostrarEstadisticas();">
												</ul>
											</div>
										</div>
									</div>			
									
								</div>
								
								
								
							</section>
						</form>
					</div>

					<!--end estadisticas-->

					

					
				</div>

				<!-- end: page -->
			</section>
		</div>

	</section>

	<!-- Vendor -->
	<script  language="JavaScript" src="funcionesJS.js" ></script>
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


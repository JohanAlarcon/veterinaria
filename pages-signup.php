<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2.min.css">
		<script type="text/javascript" src="sweetalert/sweetalert2.min.js" ></script>
		<meta charset="UTF-8">

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


		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<form id="frmajax" method="post">
				<div class="panel-body">
				

							<div class="form-group mb-lg">
								<label>Nombre</label>
								<input name="name" id="name" type="text" class="form-control input-lg" >
							</div>

							<div class="form-group mb-lg">
								<label>E-mail:</label>
								<input name="email" id="email" type="email" class="form-control input-lg" >
							</div>

							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Contrase&ntilde;a:</label>
										<input name="pwd" id="pwd" type="password" class="form-control input-lg" >
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Confirme contrase&ntilde;a:</label>
										<input name="pwd_confirm" id="pwd_confirm" type="password" class="form-control input-lg" >
									</div>
								</div>
							</div>

							<div class="col-sm-4 text-right">
							<input value="Registrar" id="submitReflejo" class="btn btn-primary" type="button" onclick="saveUsuario();">
							</div>
							
							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
									</div>
								</div>
								
							</div>
					
							<p class="text-center">Ya posees una cuenta? <a href="http://localhost/veterinaria/pages-signin.php">Inicia sesi&oacute;n</a>
						
					</div>
					</form>
				</section>
		<!-- end: page -->

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


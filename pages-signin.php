<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}

// Finalmente, destruir la sesión.
session_destroy();
?>
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
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Inicia Sesi&oacute;n</h2>
					</div>
					<div class="panel-body">
					<form id="frmajax" method="post">
					<?php
								$returnUrl = "http://localhost/veterinaria/index.php";
								if (isset($returnUrl)) {
							?><div class="form-group">
									<input name="returnUrl" type="hidden" value="<?php echo htmlentities($returnUrl) ?>" />
								</div>
							<?php
								}
							?>
							<div class="form-group mb-lg">
								<label>Nombre de usuario:</label>
								<div class="input-group input-group-icon">
									<input name="username" id="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="pages-recover-password.html" class="pull-right">Has olvidado tu contraseña?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="pwd" id="pwd" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4 text-center">
								
								<input value="Iniciar Sesion" id="submitReflejo" class="btn btn-primary" type="button" onclick="comparar();">
								
								</div>
							</div>
							
							<div id = "mensaje"> </div>
					</div>

					<p class="text-center">¿A&uacute;n no tienes una cuenta? <a href="http://localhost/veterinaria/pages-signup.php">Registrarse!</a>

						</form>
					</div>
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


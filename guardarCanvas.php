<?php   

if(isset($_GET['bandera']) && !empty($_GET['bandera'])) {
  $bandera = $_GET['bandera'];
  switch($bandera) {
    case 1: 
    guardarLenteD();      
    break;

     case 2: 
    guardarLenteI();      
    break;

    case 3: 
    guardarParpadoD();      
    break;

     case 4: 
    guardarParpadoI();      
    break;

     case 5: 
    guardarCorneaD();      
    break;

     case 6: 
    guardarCorneaI();      
    break;

     case 7: 
    guardarIrisD();      
    break;

     case 8: 
    guardarIrisI();      
    break;

     case 9: 
    guardarFondoD();      
    break;

     case 10: 
    guardarFondoI();      
    break;
  }
}

function guardarLenteD(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_lente_derecho (od_imglente) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Lente' ojo derecho almacenado con exito ";
  }
 }

 function guardarLenteI(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_lente_izquierdo (oi_imglente) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Lente' ojo izquierdo almacenado con exito ";
  }
 }

 function guardarParpadoD(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_parpado_derecho (od_imgpar) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Parpado' ojo derecho almacenado con exito ";
  }
 }

 function guardarParpadoI(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_parpado_izquierdo (oi_imgpar) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Parpado' ojo izquierdo almacenado con exito ";
  }
 }

 function guardarCorneaD(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_cornea_derecho (od_imgcornea) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Cornea' ojo derecho almacenado con exito ";
  }
 }


function guardarCorneaI(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_cornea_izquierdo (oi_imgcornea) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Cornea' ojo izquierdo almacenado con exito ";
  }
 }

 function guardarIrisD(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_iris_derecho (od_imgiris) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Iris' ojo derecho almacenado con exito ";
  }
 }


  function guardarIrisI(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_iris_izquierdo (oi_imgiris) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Iris' ojo izquierdo almacenado con exito ";
  }
 }


function guardarFondoD(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_fondo_derecho (od_imgfondo) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Fondo' ojo derecho almacenado con exito ";
  }
 }

 function guardarFondoI(){   

  $GLOBALS['host'] ="localhost";
  $GLOBALS['user'] ="root";
  $GLOBALS['pw'] ="";
  $GLOBALS['db'] ="regis_ojo";

  $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
  $canvas=$_POST['base64'];
  
  $query = "INSERT INTO img_fondo_izquierdo (oi_imgfondo) VALUES('$canvas')";

  if (mysqli_query($conexion, $query) === false) {
    echo "error . ".$query;
  }else{
    echo "IMG 'Fondo' ojo izquierdo almacenado con exito ";
  }
 }
?>

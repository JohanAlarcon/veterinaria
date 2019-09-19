<?php   

if(isset($_POST["bandera"]) && !empty($_POST["bandera"])) {
    $bandera = $_POST["bandera"];
    switch($bandera) {
        case 1: 
        saveMedico();      
        break;
        case 2: 
        validarDueño();
        break;
        case 3: 
        saveMascota();
        break;
        case 4: 
        saveHistoriaClinica();
        break;
        case 5: 
        saveOjo();
        break;
        case 6:
        saveUnionIris();
        break;
        case 7:
        saveUnionCornea();
        break;
        case 13: 
        saveDiagnostico();
        break;
        case 14: 
        saveDueño();
        break;
        case 15: 
        saveUsuarios();
        break;
        case 16: 
        login();
        break;
    }
}

function saveMedico(){   
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "INSERT INTO medico(medico_numdoc,medico_nombre,medico_tel,medico_tipodoc)
    VALUES('$_POST[documento]','$_POST[nombre]','$_POST[telefono]','$_POST[tipodocumento]')";
    if (mysqli_query($conexion, $query) === false) {
        echo "<span style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* ERROR. numero de documento ya registrado *</span>";
    }else{
        echo "<span style='font-size: 10pt; font-weight: bold; color: green; text-align: center;'>* MEDICO REGISTRADO CORRECTAMENTE *</span>";
    }
}

function saveMascota(){   
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "INSERT INTO mascota(mascota_nombre,mascota_especie,mascota_raza,mascota_sexo,mascota_fecha,propietario_numdoc,mascota_motivo)
    VALUES('$_POST[masconombre]','$_POST[masespecie]','$_POST[masraza]','$_POST[massexo]','$_POST[masnacio]','$_POST[duenumerodocMascota]','$_POST[motivoConsulta]')";

    mysqli_query($conexion, $query) or die ("Problema conectando con la bd");
}

function saveHistoriaClinica(){   
    include "conexion.php";  
    /*echo "fecha : "."$_POST[fecha]". "\n";
    echo "cedula medico: "."$_POST[CedulaMedico]". "\n";
    echo "cedula propietario: ". "$_POST[duenumerodocMedico]". "\n";
    echo "id mascota: "."$_POST[idMascota]";*/
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "INSERT INTO historiaclinica (historia_fecha, historia_medico,historia_propietario, historia_mascota) 
    VALUES ('$_POST[fecha]','$_POST[CedulaMedico]','$_POST[duenumerodocMedico]', '$_POST[idMascota]')";

    mysqli_query($conexion, $query) or die ("Problema al guardar historia clinica");
}

function saveOjo(){
 /*echo "'$_POST[numHistoriaClinica]','$_POST[schirmerd]','$_POST[presionind]','$_POST[schirmeri]','$_POST[presionini]','$_POST[reflejoAd]','$_POST[reflejoAi]','$_POST[reflejoPdd]','$_POST[reflejoPdi]','$_POST[reflejoPid]','$_POST[reflejoPii]','$_POST[cultivod]','$_POST[cultivoi]','$_POST[globod]','$_POST[globoi]','$_POST[parpadod]','$_POST[parpadoi]','$_POST[conjutipd]','$_POST[conjutipi]','$_POST[conjuparpad]','$_POST[conjuparpai]','$_POST[selectcori]','$_POST[selectcord]','$_POST[testfd]','$_POST[testfi]','$_POST[gonioscipiai]','$_POST[testbd]','$_POST[testbi]','$_POST[gonioscipiad]','$_POST[gonioscipiai]','$_POST[sinequiad]','$_POST[sinequiai]','$_POST[selectirisd]','$_POST[selectirisi]','$_POST[lented]','$_POST[lentei]','$_POST[fondod]','$_POST[fondoi]'";*/

 include "conexion.php";  

 $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");

 $ojoDerecho = "INSERT INTO ojoderecho(od_id, od_refame, od_reflejod, od_reflejoi, od_schirmer, od_refcul, od_presion, od_globo, od_parpado, od_imgpar, od_tipconju, od_parconju, od_testflou, od_testbeng, od_gonioscopia, od_imgcornea, od_sinequia, od_imgiris, od_lente, od_imglente, od_fondo, od_imgfondo) 

 VALUES ('$_POST[numHistoriaClinica]','$_POST[reflejoAd]','$_POST[reflejoPdd]','$_POST[reflejoPid]','$_POST[schirmerd]','$_POST[cultivod]','$_POST[presionind]','$_POST[globod]','$_POST[parpadod]',(SELECT MAX(id) FROM img_parpado_derecho),'$_POST[conjutipd]','$_POST[conjuparpad]','$_POST[testfd]','$_POST[testbd]','$_POST[gonioscipiad]',(SELECT MAX(id) FROM img_cornea_derecho),'$_POST[sinequiad]',(SELECT MAX(id) FROM img_iris_derecho),'$_POST[lented]',(SELECT MAX(id) FROM img_lente_derecho),'$_POST[fondod]',(SELECT MAX(id) FROM img_fondo_derecho))";

 $ojoIzquierdo = "INSERT INTO ojoizquierdo(oi_id, oi_refame, oi_reflejod, oi_reflejoi, oi_schirmer, oi_refcul, oi_presion, oi_globo, oi_parpado, oi_imgpar, oi_tipconju, oi_parconju, oi_testflou, oi_testbeng, oi_gonioscopia, oi_imgcornea, oi_sinequia, oi_imgiris, oi_lente, oi_imglente, oi_fondo, oi_imgfondo) 

 VALUES ('$_POST[numHistoriaClinica]','$_POST[reflejoAi]','$_POST[reflejoPdi]','$_POST[reflejoPii]','$_POST[schirmeri]','$_POST[cultivoi]','$_POST[presionini]','$_POST[globoi]','$_POST[parpadoi]',(SELECT MAX(id) FROM img_parpado_izquierdo),'$_POST[conjutipi]','$_POST[conjuparpai]','$_POST[testfi]','$_POST[testbi]','$_POST[gonioscipiai]',(SELECT MAX(id) FROM img_cornea_izquierdo),'$_POST[sinequiai]',(SELECT MAX(id) FROM img_iris_izquierdo),'$_POST[lentei]',(SELECT MAX(id) FROM img_lente_izquierdo),'$_POST[fondoi]',(SELECT MAX(id) FROM img_fondo_izquierdo))";

 if (mysqli_query($conexion, $ojoDerecho) === false | mysqli_query($conexion, $ojoIzquierdo) === false) {
    echo "Error al insertar los datos ojo derecho".$ojoDerecho. "\n ojo ozquierdo".$ojoIzquierdo;
}else{
    echo "Campos almacenados con exito !!";
}
}


function saveUnionIris(){
    $banderaD=false;
    $banderaI=false;
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");

        // Guardar Iris ojo derecho
    for($i=0; $i<$_POST['ArrayDerecho']; $i++) 
    {

        $arrayD=json_decode($_POST['selectirisd'])[$i];

        $queryDerecho = "INSERT INTO unionirisd(union_idhitoriad, union_idiris) 
        VALUES ('$_POST[numHistoriaClinica]', '$arrayD')";

        if (mysqli_query($conexion, $queryDerecho)) 
        {
           $banderaD=true;

       }
   }

    // Guardar Iris ojo Izquierdo

   for($i=0; $i<$_POST['ArrayIzquierdo']; $i++) 
   {

    $arrayI=json_decode($_POST['selectirisi'])[$i];
    
    $queryIzquierdo = "INSERT INTO unionirisi(union_idhistoriai,union_idiris)
    VALUES ('$_POST[numHistoriaClinica]','$arrayI')"; 
    
    if (mysqli_query($conexion, $queryIzquierdo)) 
    {
       $banderaI=true;
   }
}

if($banderaD && $banderaI)
{
    echo " Datos de Iris almacenados con exito !!";
}else{
   echo "Error iris ojo derecho. \n". $queryDerecho."\nError iris ojo Izquierdo. \n".$queryIzquierdo;
}

}



function saveUnionCornea(){
    $banderaD=false;
    $banderaI=false;
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");

        // Guardar Cornea ojo derecho
    for($i=0; $i<$_POST['ArrayDerecho']; $i++) 
    {

        $arrayD=json_decode($_POST['selectcord'])[$i];

        $queryDerecho = "INSERT INTO unioncornead(union_historiad,union_cornea)
        VALUES ('$_POST[numHistoriaClinica]', '$arrayD')";

        if (mysqli_query($conexion, $queryDerecho)) 
        {
          $banderaD=true;

      }
  }

    // Guardar Cornea ojo Izquierdo

  for($i=0; $i<$_POST['ArrayIzquierdo']; $i++) 
  {

    $arrayI=json_decode($_POST['selectcori'])[$i];

    $queryIzquierdo = "INSERT INTO unioncorneai(union_historia,union_cornea) 
    VALUES ('$_POST[numHistoriaClinica]', '$arrayI')";

    if (mysqli_query($conexion, $queryIzquierdo)) 
    {
       $banderaI=true;

   }
}

if($banderaD && $banderaI)
{
    echo "Datos de Cornea almacenados con exito !!";
}else{
    echo "Error iris ojo derecho. \n". $queryDerecho."\nError iris ojo Izquierdo. \n". $queryIzquierdo;
}

}

function saveDiagnostico(){   
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");

    $query = "INSERT INTO diagnostico(diagnostico_id,diagnostico_difer,diagnostico_final,diagnostico_trata,diagnostico_obser)
    VALUES('$_POST[numHistoriaClinica]','$_POST[daignosticos]','$_POST[diagnosticofinal]','$_POST[tratamiento]','$_POST[observaciones]')";

    if(mysqli_query($conexion, $query) == false){
        echo "Error al insertar la tabla diagnostico. ". $query;
    }else
    {
        echo "Datos almacenados correctamente ";
    }   
    

}

function saveDueño(){   
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "INSERT INTO propietario(propietario_nombre,propietario_tipodoc,propietario_numdoc,propietario_tel,propietario_direccion,propietario_depart,propietario_muni)
    VALUES('$_POST[dueñonombre]','$_POST[tipodocumento]','$_POST[duenumerodoc]','$_POST[dueñotel]','$_POST[dueñodirecc]','$_POST[departamento]','$_POST[municipio]')";

    mysqli_query($conexion, $query) or die ("Problema conectando con la bd en guardar propietario");
}


function saveUsuarios(){   
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "INSERT INTO usuarios(nombre,correo,contra)
    VALUES('$_POST[name]','$_POST[email]','$_POST[pwd]')";
    if (mysqli_query($conexion, $query) === false) {
        echo "<alert style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* ERROR. numero de documento ya registrado *</span>";
    }else{
        echo "<span style='font-size: 10pt; font-weight: bold; color: green; text-align: center;'>* MEDICO REGISTRADO CORRECTAMENTE *</span>";
    }
}


function login(){   
    session_start();
    $returnUrl = $_POST["returnUrl"];
    if (is_null($returnUrl)) {
        $returnUrl = "http://localhost/veterinaria/index.php";
    }
    //echo "Cierro 1:" . $_GET["logout"];
    //echo "id: " . $_SESSION['id'];
    //aqui sale errocito
    
    /*if ($_GET["logout"]==1 AND $_SESSION['id']) {
        session_destroy();
        $message = "Has cerrado la sesión correctamente";
    }*/
    include "conexion.php";  
    $correo =$_POST['username'];
    $contra =$_POST['pwd'];
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "SELECT * FROM usuarios WHERE correo ='$correo'  AND contra ='$contra' ";
    $result= mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($result);
// $_SESSION['id_user']= "inactivo";
    if($row){
        $_SESSION['id_user']= "activo";

    //header("Location:  $returnUrl");
        echo"<script>location.href ='http://localhost/veterinaria/index.php'</script>";

    }else{
    //$_SESSION['id_user']= "inactivo";
        echo("error");
    }

}

?>

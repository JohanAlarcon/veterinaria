<?php   
$bandera = $_POST["bandera"];

if(isset($_POST["bandera"]) && !empty($_POST["bandera"])) {
    $bandera = $_POST["bandera"];
    switch($bandera) {
        case 4: 
        consultarMedico();
        break;

        case 5: 
        consultarPaciente();
        break;
    }
}

function consultarMedico(){   
    include "conexion.php";  
    $mensaje="";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "SELECT * FROM medico WHERE medico_numdoc='$_POST[CedulaMedico]'";

    $result=mysqli_query($conexion,$query);
    if (mysqli_num_rows($result) == 0) { 
       echo   mysqli_num_rows($result); // $result = 0 , si no existe el medico

   }else{
       echo  mysqli_num_rows($result); //$result =! 0 , si  existe el medico
   } 
  
   mysqli_query($conexion, $query) or die ("Problema conectando con la bd al consultar medico");
}


/*function consultarPaciente(){ 
    include "conexion.php";  
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $query = "SELECT p.propietario_nombre,p.propietario_tel,p.propietario_direccion,m.municipio_nombre,d.departamento_nombre from propietario p INNER JOIN municipio m ON m.municipio_cod=p.propietario_muni INNER JOIN departamento d ON d.departamento_cod=p.propietario_depart where p.propietario_numdoc='$_POST[duenumerodoc]'";


    $result=mysqli_query($conexion,$query);
    if (mysqli_num_rows($result) == 0) { 

     echo "<span style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* PACIENTE NO REGISTRADO*</span>";

 }else{
    while($mostrar=mysqli_fetch_array($result)){ 

        echo "<div class='form-group'>";
        echo " </br> "; 
        echo "<label class='col-sm-3 control-label' for='profileAddress'>Nombre</label>";
        echo "<div class='col-sm-3'>";
        echo "<input  value=".$mostrar['propietario_nombre']." id='inputReadOnly' class='form-control' readonly='readonly'></br> ";
        echo "</div>";
        echo " </div> ";   

        echo "<div class='form-group'>";
        echo "<label class='col-sm-3 control-label' for='profileAddress'>Tel&eacute;fono</label>";
        echo "<div class='col-sm-3'>";
        echo "<input type='text' value=".$mostrar['propietario_tel']." id='inputReadOnly' class='form-control' readonly='readonly'></br>  ";
        echo "</div>";
        echo " </div> "; 

        echo "<div class='form-group'>";
        echo "<label class='col-sm-3 control-label' for='profileAddress'>Direccion</label>";
        echo "<div class='col-sm-3'>";
        echo "<input  value=".$mostrar['propietario_direccion']." id='inputReadOnly' class='form-control' readonly='readonly'></br> ";
        echo "</div>";
        echo " </div> ";   

        echo "<div class='form-group'>";
        echo "<label class='col-sm-3 control-label' for='profileAddress'>Departamento</label>";
        echo "<div class='col-sm-3'>";
        echo "<input type='text' value=".$mostrar['departamento_nombre']." id='inputReadOnly' class='form-control' readonly='readonly'></br>  ";
        echo "</div>";
        echo " </div> "; 

        echo "<div class='form-group'>";
        echo "<label class='col-sm-3 control-label' for='profileAddress'>Municipio</label>";
        echo "<div class='col-sm-3'>";
        echo "<input type='text' value=".$mostrar['municipio_nombre']." id='inputReadOnly' class='form-control' readonly='readonly'>";
        echo "</div>";
        echo " </div> "; 
    }     
} 


mysqli_query($conexion, $query) or die ("Problema conectando con la bd");
}*/


?>
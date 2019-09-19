
<head>
    <script  language="JavaScript" src="funcionesJS.js" ></script>
</head>
<?php  
if(isset($_POST["bandera"]) && !empty($_POST["bandera"])) {
    $bandera = $_POST["bandera"];
    switch($bandera) {

        case 1: 
        validarDueño();
        break;
    }
}

function registrarDueño(){
    ?>
    <!---------------------------------------------- LISTA Tipo de cedula ----------------------------->
</br>
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileAddress">Tipo Documento</label>
    <div class="col-md-8">
     <?php
     mostrarCedula();
     ?>
 </div>
</div>
<!---------------------------------------------- INPUT NOMBRE ----------------------------->
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileFirstName">Nombre Completo</label>
    <div class="col-md-8">
        <input type="text" class="form-control" id="dueñonombre" name="dueñonombre" required>
    </div>
</div>

<!---------------------------------------------- INPUT Telefono ----------------------------->
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileCompany">Tel&eacute;fono</label>
    <div class="col-md-8">
        <input type="text" class="form-control" id="dueñotel" name="dueñotel" onKeyPress="return soloNumeros(event)" required>
    </div>
</div>
<!---------------------------------------------- INPUT Direccion ----------------------------->
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileCompany">Direcci&oacute;n</label>
    <div class="col-md-8">
        <input type="text" class="form-control" id="dueñodirecc" name="dueñodirecc" required>
    </div>
</div>
<!------------------------------------------ INPUT Departamento ----------------------------->
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileAddress">Departamento</label>
    <div class="col-md-8">
        <?php
        mostrarDepartamento();
        ?>
    </div>
</div>
<!------------------------------------------- INPUT Municipio ----------------------------->
<div class="form-group" >
    <label class="col-md-3 control-label" for="profileAddress" >Municipio</label>
    <div class="col-md-8">
        <?php
        mostrarMunicipio();
        ?>

    </div>
</div>

<!---------------------------------------------- Boton Guardar ----------------------------->
<div class="form-group">
    <div class="col-md-12 ">
        <ul class="pager"><li class="next" >
            <input value="Guardar" id="GuardarDatosPropietario" class="btn btn-primary" type="button" onclick="savePropietario();">
        </ul>
    </div>
</div>
<?php

}


function validarDueño(){   
   include "conexion.php"; 
   include "visualizar.php";  
   $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");

   $queryConsultar = "SELECT p.propietario_nombre,p.propietario_tel,p.propietario_direccion,m.municipio_nombre,d.departamento_nombre from propietario p INNER JOIN municipio m ON m.municipio_cod=p.propietario_muni INNER JOIN departamento d ON d.departamento_cod=p.propietario_depart where p.propietario_numdoc='$_POST[duenumerodoc]'";
   $resultConsultar=mysqli_query($conexion,$queryConsultar);
   if (mysqli_num_rows($resultConsultar) == 0) { 

    registrarDueño();

}else{
    while($mostrar=mysqli_fetch_array($resultConsultar)){ 

        mostrarDueño($mostrar['propietario_nombre'],$mostrar['propietario_tel'],$mostrar['propietario_direccion'],$mostrar['departamento_nombre'],$mostrar['municipio_nombre']);    
    } 
    mostrarMascota($_POST['duenumerodoc']); 
    ?>   
    <br>
    <div class="form-group">
        <div class="col-md-12 ">   
            <input value="Añadir >" id="añadirMascota" class="btn btn-primary center-block" type="button" onclick="addMascota();">     
        </div>
    </div>
    <?php
} 
}
?>
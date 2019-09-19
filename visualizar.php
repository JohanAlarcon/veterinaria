<?php


function mostrarCedula(){   
    include "conexion.php";
    echo "<select name='tipodocumento' id='tipodocumento' >";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM tipodocumento";
    $result=mysqli_query($conexion,$sql);
    echo "<option value=''>Seleccione documento</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['tipodoc_cod'].">".$mostrar['tipodoc_nombre']."</option>";
    }
    echo " </select>";     
}


function mostrarDepartamento(){     
    include "conexion.php";
    echo "<select name='departamento' id='departamento' >";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM departamento";
    $result=mysqli_query($conexion,$sql);
    echo "<option value=''>Seleccione departamento</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['departamento_cod'].">".$mostrar['departamento_nombre']."</option>";
    }
    echo " </select>";     
}


function mostrarMunicipio(){    
    include "conexion.php";
    echo "<select  name='municipio' id='municipio'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM municipio";
    $result=mysqli_query($conexion,$sql);
    echo "<option value=''>Seleccione municipio</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['municipio_cod'].">".$mostrar['municipio_nombre']."</option>";
    }
    echo " </select>";     
}

function mostrarEspecie(){  
    include "conexion.php";
    echo "<select  name='masespecie' id='masespecie'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * from especie";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione especie</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['especie_id'].">".$mostrar['especie_nombre']."</option>";
    }
    echo " </select>";     
}



function mostrarSexo(){     
    include "conexion.php";
    echo "<select name='massexo' id='massexo'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * from sexomascota";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione Sexo</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['sexo_cod'].">".$mostrar['sexo_mascota']."</option>";
    }
    echo " </select>";     
}


function mostrarRaza(){     
    include "conexion.php";
    echo "<select name='masraza' id='masraza'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * from raza";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione raza</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['raza_id'].">".$mostrar['raza_nombre']."</option>";
    }
    echo " </select>";     
}


function mostrarRadiod(){
    include "conexion.php";
    echo "<select name='reflejoAd' id='reflejoAd'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione reflejo amenaza</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";    

}

function mostrarRadioi(){
    include "conexion.php";
    echo "<select name='reflejoAi' id='reflejoAi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione reflejo amenaza</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";          
}




function mostrarRpupilardd(){
    include "conexion.php";
    echo "<select name='reflejoPdd' id='reflejoPdd'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM reflejo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['reflejo_cod'].">".$mostrar['reflejo_nombre']."</option>";
    }
    echo " </select>";
    

}

function mostrarRpupilardi(){
    include "conexion.php";
    echo "<select name='reflejoPdi' id='reflejoPdi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM reflejo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['reflejo_cod'].">".$mostrar['reflejo_nombre']."</option>";
    }
    echo " </select>";
    


}

function mostrarRpupilarid(){
    include "conexion.php";
    echo "<select name='reflejoPid' id='reflejoPid'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM reflejo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['reflejo_cod'].">".$mostrar['reflejo_nombre']."</option>";
    }
    echo " </select>";

}

function mostrarRpupilarii(){
    include "conexion.php";
    echo "<select name='reflejoPii' id='reflejoPii'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM reflejo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['reflejo_cod'].">".$mostrar['reflejo_nombre']."</option>";
    }
    echo " </select>";      
}

function mostrarCultivod(){
    include "conexion.php";
    echo "<select name='cultivod' id='cultivod'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM cultivo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['cultivo_codigo'].">".$mostrar['cultivo_nombre']."</option>";
    }
    echo " </select>";  
    

}


function mostrarCultivoi(){
    include "conexion.php";
    echo "<select name='cultivoi' id='cultivoi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM cultivo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['cultivo_codigo'].">".$mostrar['cultivo_nombre']."</option>";
    }
    echo " </select>";  

}

function mostrarRglobod(){
    include "conexion.php";
    echo "<select name='globod' id='globod'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM globoocular";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['globo_cod'].">".$mostrar['globo_nombre']."</option>";
    }
    echo " </select>";  


}

function mostrarRgloboi(){
    include "conexion.php";
    echo "<select name='globoi' id='globoi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM globoocular";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['globo_cod'].">".$mostrar['globo_nombre']."</option>";
    }
    echo " </select>";  
    
}

function mostrarRparpadod(){
    include "conexion.php";
    echo "<select name='parpadod' id='parpadod'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM parpado";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['parpado_cod'].">".$mostrar['parpado_nombre']."</option>";
    }
    echo " </select>";  

}

function mostrarRparpadoi(){
    include "conexion.php";
    echo "<select name='parpadoi' id='parpadoi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM parpado";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['parpado_cod'].">".$mostrar['parpado_nombre']."</option>";
    }
    echo " </select>";

}

function mostrarRconjuntipd(){
    include "conexion.php";
    echo "<select name='conjutipd' id='conjutipd'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM conjuntivatipo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['conjutip_cod'].">".$mostrar['conjutip_nombre']."</option>";
    }
    echo " </select>";
    
}

function mostrarRconjuntipi(){
    include "conexion.php";
    echo "<select name='conjutipi' id='conjutipi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM conjuntivatipo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['conjutip_cod'].">".$mostrar['conjutip_nombre']."</option>";
    }
    echo " </select>";

}


function mostrarRconjunparpd(){
    include "conexion.php";
    echo "<select name='conjuparpad' id='conjuparpad'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM conjuntivaparpado";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo p&aacute;rpado</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['conjuparp_cod'].">".$mostrar['conjuparp_nombre']."</option>";
    }
    echo " </select>";
    
}


function mostrarRconjunparpi(){
    include "conexion.php";
    echo "<select name='conjuparpai' id='conjuparpai'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM conjuntivaparpado";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione tipo p&aacute;rpado</option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['conjuparp_cod'].">".$mostrar['conjuparp_nombre']."</option>";
    }
    echo " </select>";

}


function mostrarRadiotd(){
    include "conexion.php";
    echo "<select name='testfd' id='testfd'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";
    
}

function mostrarRadioti(){
    include "conexion.php";
    echo "<select name='testfi' id='testfi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";
    

}

function mostrarRadiobd(){
    include "conexion.php";
    echo "<select name='testbd' id='testbd'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";


}


function mostrarRadiobi(){
    include "conexion.php";
    echo "<select name='testbi' id='testbi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM test";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['test_cod'].">".$mostrar['test_nombre']."</option>";
    }
    echo " </select>";
    
}

function mostrarsinequiad(){
    include "conexion.php";
    echo "<select name='sinequiad' id='sinequiad'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM tiposinequia";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['sinequia_cod'].">".$mostrar['sinequia_nombre']."</option>";
    }
    echo " </select>";

}


function mostrarsinequiai(){
    include "conexion.php";
    echo "<select name='sinequiai' id='sinequiai'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM tiposinequia";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['sinequia_cod'].">".$mostrar['sinequia_nombre']."</option>";
    }
    echo " </select>";
    
}

function mostrarlented(){
    include "conexion.php";
    echo "<select name='lented' id='lented'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM lente";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['lente_cod'].">".$mostrar['lente_nombre']."</option>";
    }
    echo " </select>";
}

function mostrarlentei(){
    include "conexion.php";
    echo "<select name='lentei' id='lentei'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM lente";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['lente_cod'].">".$mostrar['lente_nombre']."</option>";
    }
    echo " </select>";      
}

function mostrarfondod(){
    include "conexion.php";
    echo "<select name='fondod' id='fondod'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM fondovitreo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['fondov_cod'].">".$mostrar['fondov_nombre']."</option>";
    }
    echo " </select>";  

}

function mostrarfondoi(){
    include "conexion.php";
    echo "<select name='fondoi' id='fondoi'>";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM fondovitreo";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['fondov_cod'].">".$mostrar['fondov_nombre']."</option>";
    }
    echo " </select>";  


}

function mostrardiagnostico(){
    include "conexion.php";
    echo "<select name='examenes' id='examenes'  >";

    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM examen_complemen";
    $result=mysqli_query($conexion,$sql);

    echo "<option value=''>Seleccione </option>";
    while($mostrar=mysqli_fetch_array($result)){
        echo "<option value=".$mostrar['examcom_cod'].">".$mostrar['examcom_nomb']."</option>";
    }
    echo " </select>";  


}

function mostrarselectcord(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM corneacamara";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){

        echo "<div class='form-group'>";
        echo "&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='checksCord[]' value=".$mostrar['corneaca_cod'].">    ".$mostrar['corneaca_nombre']."";
        echo "</div>";
    }               
}

function mostrarselectcori(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM corneacamara";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){

        echo "<div class='form-group'>";
        echo "&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='checksCori[]' value=".$mostrar['corneaca_cod'].">    ".$mostrar['corneaca_nombre']."";
        echo "</div>";
    }               
}

function mostrarselectirisd(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM irispupila";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){

        echo "<div class='form-group'>";
        echo "&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='checksIrisd[]' value=".$mostrar['irispu_cod'].">    ".$mostrar['irispu_nombre']."";
        echo "</div>";
    }               
}

function mostrarselectirisi(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT * FROM irispupila";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        echo "<div class='form-group'>";
        echo "&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='checksIrisi[]' value=".$mostrar['irispu_cod'].">    ".$mostrar['irispu_nombre']."";
        echo "</div>";
    }               
}

function mostrarNumeroHistoriaClinica(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT MAX(historia_id+1) FROM historiaclinica";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        if ($mostrar['MAX(historia_id+1)'] == NULL) { 
         echo "<div class='form-group' align='center'>";
         echo "<label class='col-md-3 control-label' for='profileFirstName' style='color:#FF0000';>Num. de historia Clinica</label>";
         echo "<div class='col-sm-2'>";
         echo "<input  value='1' class='form-control'  id = 'historia' readonly='readonly' style='text-align:center'></br> ";
         echo "</div>";
         echo "</div>";
     }else{
       echo "<div class='form-group' align='center'>";
       echo "<label class='col-md-3 control-label' for='profileFirstName' style='color:#FF0000';>Num. de historia Clinica</label>";
       echo "<div class='col-sm-2'>";
       echo "<input  value=".$mostrar['MAX(historia_id+1)']." class='form-control'  id = 'historia' readonly='readonly' style='text-align:center'></br> ";
       echo "</div>";
       echo "</div>";
   }

}      
}

function mostrarNumeroHistoriaClinica1(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT MAX(historia_id) FROM historiaclinica";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        if ($mostrar['MAX(historia_id)'] == NULL) { 
        echo "<div class='form-group' align='center'>";
        echo "<label class='col-md-3 control-label' for='profileFirstName' style='color:#FF0000';>Num. de historia Clinica</label>";
        echo "<div class='col-sm-2'>";
        echo "<input  value='1' class='form-control'  id = 'historia' readonly='readonly' style='text-align:center'></br> ";
        echo "</div>";
        echo "</div>";
    }else{
    echo "<div class='form-group' align='center'>";
    echo "<label class='col-md-3 control-label' for='profileFirstName' style='color:#FF0000';>Num. de historia Clinica</label>";
    echo "<div class='col-sm-2'>";
    echo "<input  value=".$mostrar['MAX(historia_id)']." class='form-control'  id = 'historia' readonly='readonly' style='text-align:center'></br> ";
    echo "</div>";
    echo "</div>";
}

}      
}

function mostrarIdMascota(){
    include "conexion.php";
    $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
    $sql="SELECT CONCAT( REPEAT( '0', 3 - LENGTH( mascota_id) ) , MAX(mascota_id)) FROM mascota";
    $columna="CONCAT( REPEAT( '0', 3 - LENGTH( mascota_id) ) , MAX(mascota_id))";

    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        if ($mostrar[$columna] == NULL) { 
         echo "<div class='form-group'>";
         echo "<label class='col-md-3 control-label' for='profileFirstName'>ID mascota</label>";
         echo "<div class='col-sm-2'>";
         echo "<input  value='001' class='form-control'  id = 'cedulaMascota' readonly='readonly' ></br> ";
         echo "</div>";
         echo "</div>";
     }else{
       echo "<div class='form-group'>";
       echo "<label class='col-md-3 control-label' for='profileFirstName'>ID mascota</label>";
       echo "<div class='col-sm-2'>";
       echo "<input  value=".$mostrar[$columna]." class='form-control'  id = 'cedulaMascota' readonly='readonly'></br> ";
       echo "</div>";
       echo "</div>";
   }

}      
}

function mostrarDueño($nombre,$telefono,$direccion,$departamento,$municipio){
    ?>

    <footer class="panel-footer">
        <div class="row">
            <div class="col-md-12 ">
                <header class="panel-heading">
                    <h2 class="panel-title">DATOS PROPIETARIO</h2>
                </header>
                <div class='form-group'>
                </br> 
                <div class='col-sm-3'>
                  <label class='col-sm-3 control-label' for='profileAddress'>Nombre</label>
                  <input  value= <?php echo $nombre ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
              </div>
              <div class='col-sm-3'>
               <label class='col-sm-3 control-label' for='profileAddress'>Tel&eacute;fono</label>
               <input type='text' value=<?php echo $telefono ?> id='inputReadOnly' class='form-control' readonly='readonly'></br> 
           </div>
           <div class='col-sm-3'>
            <label class='col-sm-3 control-label' for='profileAddress'>Direccion</label>
            <input  value=<?php echo $direccion ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
        </div>
        <div class='col-sm-3'>
            <label class='col-sm-3 control-label' for='profileAddress'>Departamento</label>
            <input type='text' value=<?php echo $departamento ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
        </div>  


        <div class='form-group'>
            <div class='col-sm-3'>
               <label class='col-sm-3 control-label' for='profileAddress'>Municipio</label>
               <input type='text' value=<?php echo $municipio ?> id='inputReadOnly' class='form-control' readonly='readonly'>
           </div>
       </div>

   </div>
</div>
</footer>   
<?php
}


function mostrarMascota($cedula){

   include "conexion.php";
   $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
   $sqlMascota = "SELECT m.mascota_nombre, m.mascota_fecha, m.mascota_motivo, e.especie_nombre,r.raza_nombre,s.sexo_mascota,m.mascota_id FROM mascota m INNER JOIN especie e 
   ON e.especie_id=m.mascota_especie
   INNER JOIN raza r
   ON r.raza_id=m.mascota_raza
   INNER JOIN sexomascota s
   ON s.sexo_cod=m.mascota_sexo
   WHERE m.propietario_numdoc='$cedula'";

   $resultMascota=mysqli_query($conexion,$sqlMascota);
   $contador=0;

   while($mostrar=mysqli_fetch_array($resultMascota)){
    $contador++;
    ?>

    <footer class="panel-footer">
        <div class="row">
            <div class="col-md-12 ">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo "MASCOTA # ". $contador; ?></h2>
                </header>


                <div class='form-group'>
                </br> 
                <div class='col-sm-3'>
                  <label class='col-sm-3 control-label' for='profileAddress'>Nombre</label>
                  <input  value= <?php echo $mostrar['mascota_nombre'] ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
              </div>
              <div class='col-sm-3'>
               <label class='col-sm-7 control-label' for='profileAddress'>Fecha de nac.</label>
               <input type='text' value=<?php echo $mostrar['mascota_fecha'] ?> id='inputReadOnly' class='form-control' readonly='readonly'></br> 
           </div>
           <div class='col-sm-3'>
            <label class='col-sm-3 control-label' for='profileAddress'>Especie</label>
            <input  value=<?php echo $mostrar['especie_nombre'] ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
        </div>
        <div class='col-sm-3'>
            <label class='col-sm-3 control-label' for='profileAddress'>Raza</label>
            <input type='text' value=<?php echo $mostrar['raza_nombre'] ?> id='inputReadOnly' class='form-control' readonly='readonly'></br>
        </div>  


        <div class='form-group'>
            <div class='col-sm-3'>
               <label class='col-sm-3 control-label' for='profileAddress'>Sexo</label>
               <input type='text' value=<?php echo $mostrar['sexo_mascota'] ?> id='inputReadOnly' class='form-control' readonly='readonly'>
           </div>
           <div class='col-sm-9'>
               <label class='col-sm-12 control-label' for='profileAddress'>Motivo de consulta</label>
               <textarea  class="form-control" readonly='readonly'><?php echo $mostrar['mascota_motivo'] ?></textarea>
           </div>
       </div>
   </div>
</div>
</footer>   
<?php
}
}

?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Estadisticas Reflejo</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Estadisticas Lente'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
        </script>
    </head>
    <body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/data.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th>Ojo derecho</th>
            <th>Ojo izquierdo</th>
            
			
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Esclerosis</th>
			
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_lente=1") as $row) {
            echo "<td>" . $row['COUNT(*)'] . "</td>";
            }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_lente=1") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    } 
           
                
            ?>
			
        </tr>
        <tr>
            <th>Catarata</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_lente=2") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_lente=2") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
               
            ?>
			
        </tr>
        <tr>
            <th>Subluxaci&oacute;n</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_lente=3") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_lente=3") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
             
            ?>
        </tr>
        <tr>
            <th>Luxaci&oacute;n</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_lente=4") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_lente=4") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
            
            ?>
        </tr>
       
        
    </tbody>
</table>
    </body>
</html>

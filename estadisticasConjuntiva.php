
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
            text: 'Estadisticas Conjuntiva'
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
            <th>Ojo Izquierdo</th>
            
			
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Hiperamia</th>
			
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_tipconju=1") as $row) {
            echo "<td>" . $row['COUNT(*)'] . "</td>";
            }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_tipconju=1") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    } 
           
                
            ?>
			
        </tr>
        <tr>
            <th>Foliculos</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_tipconju=2") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_tipconju=2") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
               
            ?>
			
        </tr>
        <tr>
            <th>Quemosis</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_tipconju=3") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_tipconju=3") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
             
            ?>
        </tr>
        <tr>
            <th>Prolapso</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_tipconju=4") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_tipconju=4") as $row) {
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        } 
            
            ?>
        </tr>
        <tr>
            <th>T.P Humedecido</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_parconju=1") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_parconju=1") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    }
            ?>
        </tr>
        <tr>
            <th>T.P Enrojecido</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_parconju=2") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_parconju=2") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    }
            ?>
        </tr>
        <tr>
            <th>T.P Inflamacion</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_parconju=3") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_parconju=3") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    }
            ?>
        </tr>
        <tr>
            <th>T.P Pliegues</th>
            <?php
            require("conexion.php");
            $conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
            foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_parconju=4") as $row) {
                echo "<td>" . $row['COUNT(*)'] . "</td>";
                }
            foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_parconju=4") as $row) {
                    echo "<td>" . $row['COUNT(*)'] . "</td>";
                    }
            ?>
        </tr>
        
    </tbody>
</table>
    </body>
</html>

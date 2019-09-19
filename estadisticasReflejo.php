
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
			text: 'Estadisticas Reflejo'
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
			<th>R.P Directo Ojo derecho</th>
			<th>R.P Indirecto Ojo derecho</th>
			<th>R.P Directo Ojo izquierdo</th>
			<th>R.P Indirecto Ojo izquierdo</th>
		
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Rapido</th>
			
			<?php
			require("conexion.php");
			$conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejod=1") as $row) {
			echo "<td>" . $row['COUNT(*)'] . "</td>";
			}
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejoi=1") as $row) {
			echo "<td>" . $row['COUNT(*)'] . "</td>";
			}
			foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejod=1") as $row) {
				echo "<td>" . $row['COUNT(*)'] . "</td>";
				}
				foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejoi=1") as $row) {
				echo "<td>" . $row['COUNT(*)'] . "</td>";
				}
			?>
			
		</tr>
		<tr>
			<th>Medio</th>
			<?php
			require("conexion.php");
			$conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejod=2") as $row) {
			echo "<td>" . $row['COUNT(*)'] . "</td>";
			}
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejoi=2") as $row) {
				echo "<td>" . $row['COUNT(*)'] . "</td>";
				}
				foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejod=2") as $row) {
					echo "<td>" . $row['COUNT(*)'] . "</td>";
					}
					foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejoi=2") as $row) {
					echo "<td>" . $row['COUNT(*)'] . "</td>";
					}
			?>
			
		</tr>
		<tr>
			<th>Ausente</th>
			<?php
			require("conexion.php");
			$conexion=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['pw'],$GLOBALS['db'])or die("problemas al conectar");
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejod=3") as $row) {
			echo "<td>" . $row['COUNT(*)'] . "</td>";
			}
			foreach($conexion->query("SELECT COUNT(*) FROM ojoderecho  where od_reflejoi=3") as $row) {
				echo "<td>" . $row['COUNT(*)'] . "</td>";
				}
				foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejod=3") as $row) {
					echo "<td>" . $row['COUNT(*)'] . "</td>";
					}
					foreach($conexion->query("SELECT COUNT(*) FROM ojoizquierdo  where oi_reflejoi=3") as $row) {
					echo "<td>" . $row['COUNT(*)'] . "</td>";
					}
			?>
		</tr>
		
	</tbody>
</table>
	</body>
</html>

<?php
require 'fpdf.php'; 

class PDF extends FPDF
{

	protected $B = 0;
	protected $I = 0;
	protected $U = 0;
	protected $HREF = '';
// Cabecera de página
	function Header()
	{
    // Logo
		$this->Image('Logo.png',10,8,33);
    // Arial bold 15
		$this->SetFont('Arial','B',9);
		$this->SetTextColor(0,7,120);//color de la letra
    // Movernos a la derecha
		$this->Cell(75);
    // Título
		$this->Cell(35,8,' REPORTE ',0,0,'C');
    // Salto de línea
		$this->Ln(5);
	}

// Pie de página
	function Footer()
	{
    // Posición: a 1,5 cm del final
		$this->SetY(-15);
    // Arial italic 8
		$this->SetFont('Arial','I',9);
    // Número de página
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}

	function WriteHTML($html)
	{
    // Intérprete de HTML
		$html = str_replace("\n",' ',$html);
		$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
		foreach($a as $i=>$e)
		{
			if($i%2==0)
			{
            // Text
				if($this->HREF)
					$this->PutLink($this->HREF,$e);
				else
					$this->Write(5,$e);
			}
			else
			{
            // Etiqueta
				if($e[0]=='/')
					$this->CloseTag(strtoupper(substr($e,1)));
				else
				{
                // Extraer atributos
					$a2 = explode(' ',$e);
					$tag = strtoupper(array_shift($a2));
					$attr = array();
					foreach($a2 as $v)
					{
						if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
							$attr[strtoupper($a3[1])] = $a3[2];
					}
					$this->OpenTag($tag,$attr);
				}
			}
		}
	}
	function OpenTag($tag, $attr)
	{
    // Etiqueta de apertura
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,true);
		if($tag=='A')
			$this->HREF = $attr['HREF'];
		if($tag=='BR')
			$this->Ln(5);
	}

	function CloseTag($tag)
	{
    // Etiqueta de cierre
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,false);
		if($tag=='A')
			$this->HREF = '';
	}

	function SetStyle($tag, $enable)
	{
    // Modificar estilo y escoger la fuente correspondiente
		$this->$tag += ($enable ? 1 : -1);
		$style = '';
		foreach(array('B', 'I', 'U') as $s)
		{
			if($this->$s>0)
				$style .= $s;
		}
		$this->SetFont('',$style);
	}

	function PutLink($URL, $txt)
	{
    // Escribir un hiper-enlace
		$this->SetTextColor(0,0,255);
		$this->SetStyle('U',true);
		$this->Write(5,$txt,$URL);
		$this->SetStyle('U',false);
		$this->SetTextColor(0);
	}

}

include ("conexion.php");

//consulta 

$conexion=mysqli_connect($host,$user,$pw,$db)or die("problemas al conectar");
$sqlPropietario = "SELECT p.propietario_nombre,p.propietario_tel,p.propietario_direccion,m.municipio_nombre,d.departamento_nombre
FROM propietario p INNER JOIN municipio m ON m.municipio_cod=p.propietario_muni 
INNER JOIN departamento d ON d.departamento_cod=p.propietario_depart 
WHERE p.propietario_numdoc='$_GET[cedula]'";

$sqlMascota = "SELECT m.mascota_id, m.mascota_nombre, m.mascota_fecha, m.mascota_motivo, e.especie_nombre,r.raza_nombre,s.sexo_mascota FROM mascota m 
INNER JOIN especie e 
ON e.especie_id=m.mascota_especie
INNER JOIN raza r
ON r.raza_id=m.mascota_raza
INNER JOIN sexomascota s
ON s.sexo_cod=m.mascota_sexo
WHERE m.propietario_numdoc='$_GET[cedula]'";


$resultPropietario=mysqli_query($conexion,$sqlPropietario);

if (mysqli_num_rows($resultPropietario) == 0) { 

	echo "<span style='font-size: 22pt; font-weight: bold; color: red; text-align: center;'>* CEDULA NO REGISTRADA *</span>";
	
}else{

	$resultMascota=mysqli_query($conexion,$sqlMascota);


	while($mostrar=mysqli_fetch_array($resultPropietario)){
		$propietario = "<br><br><br><br><b>                                      Nombre : </b>".$mostrar['propietario_nombre']."  "."
		<b>          Telefono : </b>".$mostrar['propietario_tel']."
		<br><br><b>                                      Direccion : </b>".$mostrar['propietario_direccion']." "."
		<b>    Numero de documento : </b>".$_GET['cedula']."
		<br><br><b>                                      Municipio : </b>".$mostrar['municipio_nombre'].""."
		<b>                                          Departamento : </b>".$mostrar['departamento_nombre'];
	}


	$pdf = new PDF();
	$pdf -> AliasNbPages();
	$pdf->AddPage();
	$pdf->WriteHTML($propietario);
	// Salto de línea
	$pdf->Ln(30);
	$pdf->Cell(75);// mover a la derecha
	$pdf->SetFont('Arial','B',9);
	$pdf->SetTextColor(0,7,120);//color de la letra
	$pdf->Cell(40,8,'DATOS DE MASCOTA',0	,0,'C');
	$pdf->SetTextColor(0,0,0);//color de la letra
	$pdf->Ln(25);
	$contador=0;


	function getImage($dataURI){ 
		$img = explode(',',$dataURI,2); 
		$pic = 'data://text/plain;base64,'.$img[1]; 
    $type = explode("/", explode(':', substr($dataURI, 0, strpos($dataURI, ';')))[1])[1]; // get the image type 
    if ($type=="png"||$type=="jpeg"||$type=="gif") return array($pic, $type); 
    return false; 
} 

while($mostrar=mysqli_fetch_array($resultMascota)){
	$contador++;
	$pdf->SetFont('Arial','B',9);
	$pdf->Ln(20);
	$pdf->Cell(40,8,'MASCOTA #'.$contador,0	,0,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(60,10,'NOMBRE',1,0,'C',0);
	$pdf -> Cell(35,10,'FECHA DE NAC.',1,0,'C',0);
	$pdf -> Cell(25,10,'ESPECIE',1,0,'C',0);
	$pdf -> Cell(45,10,'RAZA',1,0,'C',0);
	$pdf -> Cell(20,10,'SEXO',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> Cell(60,10,$mostrar['mascota_nombre'],1,0,'C',0);
	$pdf -> Cell(35,10,$mostrar['mascota_fecha'],1,0,'C',0);
	$pdf -> Cell(25,10,$mostrar['especie_nombre'],1,0,'C',0);
	$pdf -> Cell(45,10,$mostrar['raza_nombre'],1,0,'C',0);
	$pdf -> Cell(20,10,$mostrar['sexo_mascota'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(185,10,'MOTIVO DE CONSULTA',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->MultiCell(185,10,$mostrar['mascota_motivo'],1,'C');
	$pdf->Ln(25);

	// consultas para mostrar las evaluaciones
	


	$sqlojoderecho = "SELECT t.test_nombre, r.reflejo_nombre, w.reflejo_nombre, o.od_schirmer, c.cultivo_nombre, o.od_presion, g.globo_nombre,
	p.parpado_nombre, o.od_imgpar, j.conjutip_nombre, s.conjuparp_nombre, y.test_nombre, u.test_nombre, o.od_gonioscopia, o.od_imgcornea,
	q.sinequia_nombre, o.od_imgiris, l.lente_nombre, o.od_imglente, f.fondov_nombre, o.od_imgfondo FROM ojoderecho o
	INNER JOIN test t
	ON t.test_cod=o.od_refame
	INNER JOIN reflejo r
	ON r.reflejo_cod=o.od_reflejod
	INNER JOIN reflejo w
	ON w.reflejo_cod=o.od_reflejoi
	INNER JOIN cultivo c
	ON c.cultivo_codigo=o.od_refcul
	INNER JOIN globoocular g
	ON g.globo_cod=o.od_globo
	INNER JOIN parpado p
	ON p.parpado_cod=o.od_parpado
	INNER JOIN conjuntivatipo j
	ON j.conjutip_cod=o.od_tipconju
	INNER JOIN conjuntivaparpado s
	ON s.conjuparp_cod=o.od_parconju
	INNER JOIN test y
	ON y.test_cod=o.od_testflou
	INNER JOIN test u
	ON u.test_cod=o.od_testbeng
	INNER JOIN tiposinequia q
	ON q.sinequia_cod=o.od_sinequia
	INNER JOIN lente l
	ON l.lente_cod=o.od_lente
	INNER JOIN fondovitreo f
	ON f.fondov_cod=o.od_fondo
	WHERE o.od_id = (SELECT h.historia_id FROM historiaclinica h 
	WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlojoizquierdo = "SELECT t.test_nombre, r.reflejo_nombre, w.reflejo_nombre, o.oi_schirmer, c.cultivo_nombre, o.oi_presion, g.globo_nombre,
	p.parpado_nombre, o.oi_imgpar, j.conjutip_nombre, s.conjuparp_nombre, y.test_nombre, u.test_nombre, o.oi_gonioscopia, o.oi_imgcornea,
	q.sinequia_nombre, o.oi_imgiris, l.lente_nombre, o.oi_imglente, f.fondov_nombre, o.oi_imgfondo FROM ojoizquierdo o
	INNER JOIN test t
	ON t.test_cod=o.oi_refame
	INNER JOIN reflejo r
	ON r.reflejo_cod=o.oi_reflejod
	INNER JOIN reflejo w
	ON w.reflejo_cod=o.oi_reflejoi
	INNER JOIN cultivo c
	ON c.cultivo_codigo=o.oi_refcul
	INNER JOIN globoocular g
	ON g.globo_cod=o.oi_globo
	INNER JOIN parpado p
	ON p.parpado_cod=o.oi_parpado
	INNER JOIN conjuntivatipo j
	ON j.conjutip_cod=o.oi_tipconju
	INNER JOIN conjuntivaparpado s
	ON s.conjuparp_cod=o.oi_parconju
	INNER JOIN test y
	ON y.test_cod=o.oi_testflou
	INNER JOIN test u
	ON u.test_cod=o.oi_testbeng
	INNER JOIN tiposinequia q
	ON q.sinequia_cod=o.oi_sinequia
	INNER JOIN lente l
	ON l.lente_cod=o.oi_lente
	INNER JOIN fondovitreo f
	ON f.fondov_cod=o.oi_fondo
	WHERE o.oi_id = (SELECT h.historia_id FROM historiaclinica h
	WHERE h.historia_id = '$mostrar[mascota_id]')";

	// CONSULTAS CANVAS OJO DERECHO

	$sqlCanvasParpadoD = "SELECT i.od_imgpar FROM ojoderecho o INNER JOIN img_parpado_derecho i ON o.od_imgpar=i.id 
	WHERE o.od_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasCorneaD = "SELECT i.od_imgcornea FROM ojoderecho o INNER JOIN img_cornea_derecho i ON o.od_imgcornea=i.id 
	WHERE o.od_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasIrisD = "SELECT i.od_imgiris FROM ojoderecho o INNER JOIN img_iris_derecho i ON o.od_imgiris=i.id 
	WHERE o.od_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasLenteD = "SELECT i.od_imglente FROM ojoderecho o INNER JOIN img_lente_derecho i ON o.od_imglente=i.id 
	WHERE o.od_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasFondoD = "SELECT i.od_imgfondo FROM ojoderecho o INNER JOIN img_fondo_derecho i ON o.od_imgfondo=i.id 
	WHERE o.od_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id =  '$mostrar[mascota_id]')";


	// CONSULTAS CANVAS OJO IZQUIERDO

	$sqlCanvasParpadoI = "SELECT i.oi_imgpar FROM ojoizquierdo o INNER JOIN img_parpado_izquierdo i ON o.oi_imgpar=i.id 
	WHERE o.oi_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasCorneaI = "SELECT i.oi_imgcornea FROM ojoizquierdo o INNER JOIN img_cornea_izquierdo i ON o.oi_imgcornea=i.id 
	WHERE o.oi_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasIrisI = "SELECT i.oi_imgiris FROM ojoizquierdo o INNER JOIN img_iris_izquierdo i ON o.oi_imgiris=i.id 
	WHERE o.oi_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasLenteI = "SELECT i.oi_imglente FROM ojoizquierdo o INNER JOIN img_lente_izquierdo i ON o.oi_imglente=i.id 
	WHERE o.oi_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id = '$mostrar[mascota_id]')";

	$sqlCanvasFondoI = "SELECT i.oi_imgfondo FROM ojoizquierdo o INNER JOIN img_fondo_izquierdo i ON o.oi_imgfondo=i.id 
	WHERE o.oi_id=(SELECT h.historia_id FROM historiaclinica h WHERE h.historia_id =  '$mostrar[mascota_id]')";


	$unioncornead = "SELECT d.union_historiad, c.corneaca_nombre FROM unioncornead d 
	INNER JOIN corneacamara c
	ON c.corneaca_cod=d.union_cornea 
	WHERE d.union_historiad = (SELECT h.historia_id FROM historiaclinica h 
	WHERE h.historia_id = '$mostrar[mascota_id]')";

	$unioncorneai = "SELECT d.union_historia, c.corneaca_nombre FROM unioncorneai d 
	INNER JOIN corneacamara c
	ON c.corneaca_cod=d.union_cornea 
	WHERE d.union_historia = (SELECT h.historia_id FROM historiaclinica h 
	WHERE h.historia_id = '$mostrar[mascota_id]')";


	$unionirisd = "SELECT d.union_idhitoriad, i.irispu_nombre FROM unionirisd d 
	INNER JOIN irispupila i
	ON i.irispu_cod=d.union_idiris 
	WHERE d.union_idhitoriad = (SELECT h.historia_id FROM historiaclinica h 
	WHERE h.historia_id = '$mostrar[mascota_id]')";

	$unionirisi = "SELECT d.union_idhistoriai, i.irispu_nombre FROM unionirisi d
	INNER JOIN irispupila i ON i.irispu_cod=d.union_idiris
	WHERE d.union_idhistoriai = (SELECT h.historia_id FROM historiaclinica h 
	WHERE h.historia_id = '$mostrar[mascota_id]')";


	$diagnostico = "SELECT d.diagnostico_difer, d.diagnostico_final, d.diagnostico_trata, d.diagnostico_obser FROM diagnostico d 
	WHERE d.diagnostico_id = (SELECT h.historia_id FROM historiaclinica h
	WHERE h.historia_id = '$mostrar[mascota_id]')";

	$resultcorniad=mysqli_query($conexion,$unioncornead);
	$resultcorniai=mysqli_query($conexion,$unioncorneai);
	$resultirisd=mysqli_query($conexion,$unionirisd);
	$resultirisi=mysqli_query($conexion,$unionirisi);
	$resultdiagnostico=mysqli_query($conexion,$diagnostico);
	$resultOjoderecho=mysqli_query($conexion,$sqlojoderecho);
	$resultOjoizquierdo=mysqli_query($conexion,$sqlojoizquierdo);

	// CANVAS OJO DERECHO

	$resultCanvasParpadoD=mysqli_query($conexion,$sqlCanvasParpadoD);
	$resultCanvasCorneaD=mysqli_query($conexion,$sqlCanvasCorneaD);
	$resultCanvasIrisD=mysqli_query($conexion,$sqlCanvasIrisD);
	$resultCanvasLenteD=mysqli_query($conexion,$sqlCanvasLenteD);
	$resultCanvasFondoD=mysqli_query($conexion,$sqlCanvasFondoD);

	// CANVAS OJO IZQUIERDO

	$resultCanvasParpadoI=mysqli_query($conexion,$sqlCanvasParpadoI);
	$resultCanvasCorneaI=mysqli_query($conexion,$sqlCanvasCorneaI);
	$resultCanvasIrisI=mysqli_query($conexion,$sqlCanvasIrisI);
	$resultCanvasLenteI=mysqli_query($conexion,$sqlCanvasLenteI);
	$resultCanvasFondoI=mysqli_query($conexion,$sqlCanvasFondoI);

	// Salto de línea

	$pdf->Cell(75);// mover a la derecha
	$pdf->SetFont('Arial','B',9);
	$pdf->SetTextColor(0,7,120);//color de la letra
	$pdf->AddPage();
	$pdf->Ln(20);
	$pdf->Cell(45,8,'DATOS OJO DERECHO',0	,0,'C');
	$pdf->SetTextColor(0,0,0);//color de la letra
	$pdf->Ln(15);

	while($mostrar=mysqli_fetch_array($resultOjoderecho)){
		$pdf->SetFont('Arial','B',9);
		$pdf -> Cell(62,10,'REFLEJO DE AMENAZA',1,0,'C',0);
		$pdf -> Cell(62,10,'REFLEJO PUPILAR DIRECTO',1,0,'C',0);
		$pdf -> Cell(62,10,'REFLEJO PUPILAR INDIRECTO',1,0,'C',0);
		$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> Cell(62,10,$mostrar['test_nombre'],1,0,'C',0);
	$pdf -> Cell(62,10,$mostrar['reflejo_nombre'],1,0,'C',0);
	$pdf -> Cell(62,10,$mostrar['reflejo_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(35,10,'SCHIRMER',1,0,'C',0);
	$pdf -> Cell(35,10,'CULTIVO',1,0,'C',0);
	$pdf -> Cell(45,10,'PRESION INTRAOCULAR',1,0,'C',0);
	$pdf -> Cell(35,10,'GLOBO OCULAR',1,0,'C',0);
	$pdf -> Cell(35,10,'PARPADOS',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> Cell(35,10,$mostrar['od_schirmer'],1,0,'C',0);
	$pdf -> Cell(35,10,$mostrar['cultivo_nombre'],1,0,'C',0);
	$pdf -> Cell(45,10,$mostrar['od_presion'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar['globo_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar['parpado_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(40,10,'CONJNTIVA',1,0,'C',0);
	$pdf -> Cell(40,10,'TERCER PARPADO',1,0,'C',0);
	$pdf -> Cell(50,10,'TEST FLUORESCEINA',1,0,'C',0);
	$pdf -> Cell(50,10,'TEST ROSA BENGALA',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->Cell(40,10,$mostrar['conjutip_nombre'],1,0,'C',0);
	$pdf ->Cell(40,10,$mostrar['conjuparp_nombre'],1,0,'C',0);
	$pdf ->Cell(50,10,$mostrar['test_nombre'],1,0,'C',0);
	$pdf ->Cell(50,10,$mostrar['test_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(35,10,'GONIOSCOPIA',1,0,'C',0);
	$pdf -> Cell(35,10,'IRIS Y PUPILA',1,0,'C',0);
	$pdf -> Cell(35,10,'LENTE',1,0,'C',0);
	$pdf -> Cell(35,10,'FONDO Y VITREO',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->Cell(35,10,$mostrar['od_gonioscopia'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar['sinequia_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar['lente_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar['fondov_nombre'],1,0,'C',0);
	$pdf->Ln(15);
}

// Salto de línea

$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra
$pdf->AddPage();
$pdf->Ln(20);
$pdf->Cell(45,8,'Cornea derecha',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);
$pdf->SetFont('Arial','B',9);
$pdf -> Cell(40,10,'CORNEA',1,0,'C',0);
$pdf->Ln(10);
while($mostrar=mysqli_fetch_array($resultcorniad)){	
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(40,10,$mostrar['corneaca_nombre'],1,'C');
}



// Salto de línea
$pdf->Ln(10);
$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra
$pdf->Cell(-110,8,'Iris derecho',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);
$pdf->SetFont('Arial','B',9);
$pdf -> Cell(40,10,'IRIS',1,0,'C',0);
$pdf->Ln(10);
while($mostrar=mysqli_fetch_array($resultirisd)){
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(40,10,$mostrar['irispu_nombre'],1,'C');
	
}



//--------------------- INICIO CANVAS OJO DERECHO ---------------------

$pdf->AddPage();


while($mostrar=mysqli_fetch_array($resultCanvasParpadoD)){
	$pic = getImage($mostrar['od_imgpar']); 

	if ($pic!==false){
		$pdf->Ln(10);
		$pdf->Cell(45,8,'PARPADO OJO DERECHO',0   ,0,'C');
		$pdf->Image($pic[0],10,30,0,0, $pic[1]); 
	} 

}


while($mostrar=mysqli_fetch_array($resultCanvasCorneaD)){
	$pic = getImage($mostrar['od_imgcornea']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,8,'CORNEA OJO DERECHO',0   ,0,'C');
		$pdf->Image($pic[0], 10,80,0,0, $pic[1]); 
	} 

}


while($mostrar=mysqli_fetch_array($resultCanvasIrisD)){
	$pic = getImage($mostrar['od_imgiris']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'IRIS OJO DERECHO',0   ,0,'C');
		$pdf->Image($pic[0], 10,140,0,0, $pic[1]); 
	} 

}

while($mostrar=mysqli_fetch_array($resultCanvasLenteD)){
	$pic = getImage($mostrar['od_imglente']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'LENTE OJO DERECHO',0   ,0,'C');
		$pdf->Image($pic[0], 10,190,0,0, $pic[1]); 
	} 

}

while($mostrar=mysqli_fetch_array($resultCanvasFondoD)){
	$pic = getImage($mostrar['od_imgfondo']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'FONDO OJO DERECHO',0   ,0,'C');
		$pdf->Image($pic[0], 10,240,0,0, $pic[1]); 
	} 

}

// --------------------- FIN CANVAS  OJO DERECHO---------------------

// Salto de línea
$pdf->Ln(10);
$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra

$pdf->AddPage();
$pdf->Ln(20);
$pdf->Cell(45,8,'DATOS OJO IZQUIERDO',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);

while($mostrar2=mysqli_fetch_array($resultOjoizquierdo)){
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(62,10,'REFLEJO DE AMENAZA',1,0,'C',0);
	$pdf -> Cell(62,10,'REFLEJO PUPILAR DIRECTO',1,0,'C',0);
	$pdf -> Cell(62,10,'REFLEJO PUPILAR INDIRECTO',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> Cell(62,10,$mostrar2['test_nombre'],1,0,'C',0);
	$pdf -> Cell(62,10,$mostrar2['reflejo_nombre'],1,0,'C',0);
	$pdf -> Cell(62,10,$mostrar2['reflejo_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(35,10,'SCHIRMER',1,0,'C',0);
	$pdf -> Cell(35,10,'CULTIVO',1,0,'C',0);
	$pdf -> Cell(45,10,'PRESION INTRAOCULAR',1,0,'C',0);
	$pdf -> Cell(35,10,'GLOBO OCULAR',1,0,'C',0);
	$pdf -> Cell(35,10,'PARPADOS',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> Cell(35,10,$mostrar2['oi_schirmer'],1,0,'C',0);
	$pdf -> Cell(35,10,$mostrar2['cultivo_nombre'],1,0,'C',0);
	$pdf -> Cell(45,10,$mostrar2['oi_presion'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar2['globo_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar2['parpado_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(50,10,'CONJNTIVA',1,0,'C',0);
	$pdf -> Cell(40,10,'TERCER PARPADO',1,0,'C',0);
	$pdf -> Cell(50,10,'TEST FLUORESCEINA',1,0,'C',0);
	$pdf -> Cell(50,10,'TEST ROSA BENGALA',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->Cell(50,10,$mostrar2['conjutip_nombre'],1,0,'C',0);
	$pdf ->Cell(40,10,$mostrar2['conjuparp_nombre'],1,0,'C',0);
	$pdf ->Cell(50,10,$mostrar2['test_nombre'],1,0,'C',0);
	$pdf ->Cell(50,10,$mostrar2['test_nombre'],1,0,'C',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(35,10,'GONIOSCOPIA',1,0,'C',0);
	$pdf -> Cell(35,10,'IRIS Y PUPILA',1,0,'C',0);
	$pdf -> Cell(35,10,'LENTE',1,0,'C',0);
	$pdf -> Cell(35,10,'FONDO Y VITREO',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->Cell(35,10,$mostrar2['oi_gonioscopia'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar2['sinequia_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar2['lente_nombre'],1,0,'C',0);
	$pdf ->Cell(35,10,$mostrar2['fondov_nombre'],1,0,'C',0);
	$pdf->Ln(15);
}

// Salto de línea

$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra
$pdf->AddPage();
$pdf->Ln(20);
$pdf->Cell(45,8,'Cornea izquierda',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);
$pdf->SetFont('Arial','B',9);
$pdf -> Cell(40,10,'CORNEA',1,0,'C',0);
$pdf->Ln(10);
while($mostrar=mysqli_fetch_array($resultcorniai)){	
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(40,10,$mostrar['corneaca_nombre'],1,'C');
}


// Salto de línea

$pdf->Ln(10);
$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra

$pdf->Cell(-110,8,'Iris izquierda',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);
$pdf->SetFont('Arial','B',9);
$pdf -> Cell(40,10,'IRIS',1,0,'C',0);
$pdf->Ln(10);
while($mostrar=mysqli_fetch_array($resultirisi)){
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(40,10,$mostrar['irispu_nombre'],1,'C');
}


//--------------------- INICIO CANVAS OJO IZQUIERDO ---------------------

$pdf->AddPage();


while($mostrar=mysqli_fetch_array($resultCanvasParpadoI)){
	$pic = getImage($mostrar['oi_imgpar']); 

	if ($pic!==false){
		$pdf->Ln(10);
		$pdf->Cell(45,8,'PARPADO OJO IZQUIERDO',0   ,0,'C');
		$pdf->Image($pic[0],10,30,0,0, $pic[1]); 
	} 

}


while($mostrar=mysqli_fetch_array($resultCanvasCorneaI)){
	$pic = getImage($mostrar['oi_imgcornea']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,8,'CORNEA OJO IZQUIERDO',0   ,0,'C');
		$pdf->Image($pic[0], 10,80,0,0, $pic[1]); 
	} 

}


while($mostrar=mysqli_fetch_array($resultCanvasIrisI)){
	$pic = getImage($mostrar['oi_imgiris']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'IRIS OJO IZQUIERDO',0   ,0,'C');
		$pdf->Image($pic[0], 10,140,0,0, $pic[1]); 
	} 

}

while($mostrar=mysqli_fetch_array($resultCanvasLenteI)){
	$pic = getImage($mostrar['oi_imglente']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'LENTE OJO IZQUIERDO',0   ,0,'C');
		$pdf->Image($pic[0], 10,190,0,0, $pic[1]); 
	} 

}

while($mostrar=mysqli_fetch_array($resultCanvasFondoI)){
	$pic = getImage($mostrar['oi_imgfondo']); 

	if ($pic!==false){
		$pdf->Ln(50);
		$pdf->Cell(45,19,'FONDO OJO IZQUIERDO',0   ,0,'C');
		$pdf->Image($pic[0], 10,240,0,0, $pic[1]); 
	} 

}

// --------------------- FIN CANVAS  OJO IZQUIERDO---------------------


// Salto de línea

$pdf->Cell(75);// mover a la derecha
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0,7,120);//color de la letra
$pdf->AddPage();
$pdf->Ln(20);
$pdf->Cell(45,8,'DIAGNOSTICOS',0	,0,'C');
$pdf->SetTextColor(0,0,0);//color de la letra
$pdf->Ln(15);
while($mostrar=mysqli_fetch_array($resultdiagnostico)){
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(185,10,'TRATAMIENTO',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(185,10,$mostrar['diagnostico_difer'],1,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(185,10,'OBSERVACIONES',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf -> MultiCell(185,10,$mostrar['diagnostico_final'],1,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(185,10,'DIAGNOSTICOS DIFERENCIALES',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->MultiCell(185,10,$mostrar['diagnostico_trata'],1,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',9);
	$pdf -> Cell(185,10,'DIAGNOSTICO FINAL',1,0,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',9);//remove negrita
	$pdf ->MultiCell(185,10,$mostrar['diagnostico_obser'],1,'C');
	$pdf->Ln(15);	
	$pdf->AddPage();
}



}

$pdf -> Output();

}


?>
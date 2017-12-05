<?php
include ('conexion.php');
error_reporting (0);
$busqueda=$_POST['busqueda2'];

if(isset($_POST['buscar']))
{
	$pol = "compradecartera WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR tasa LIKE '%".$busqueda."%' OR extracupo LIKE '%".$busqueda."%' OR cupodispo LIKE '%".$busqueda."%' OR potencialtdc LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR tel8 LIKE '%".$busqueda."%' OR tel9 LIKE '%".$busqueda."%' OR tel10 LIKE '%".$busqueda."%' OR tel11 LIKE '%".$busqueda."%' OR tel12 LIKE '%".$busqueda."%' OR tel13 LIKE '%".$busqueda."%' OR tel14 LIKE '%".$busqueda."%' OR tel15 LIKE '%".$busqueda."%' OR tel16 LIKE '%".$busqueda."%' OR tel17 LIKE '%".$busqueda."%' OR tel18 LIKE '%".$busqueda."%' OR tel19 LIKE '%".$busqueda."%' OR tel20 LIKE '%".$busqueda."%' OR tel21 LIKE '%".$busqueda."%' OR tel22 LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%')";
}

$sql = "select * from $pol";
$result = $con -> query($sql);

if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
		}
		while($row = $result->fetch_assoc()){
        $column_array[] = $row;
}

		//cabeceras para descarga
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"ReporteCompraCartera.csv\""); 

//preparar el wrapper de salida
$outputBuffer = fopen("php://output", 'w');

//volcamos el contenido del array en formato csv
    fputcsv($outputBuffer, array('No ITEM','CEDULA','NOMBRES','TASA','EXTRACUPO','CUPO DISPONIBLE','Potencial TDC','TELEFONO 1','TELEFONO 2','TELEFONO 3','TELEFONO 4','TELEFONO 5','TELEFONO 6','TELEFONO 7','TELEFONO 8','TELEFONO 9','TELEFONO 10','TELEFONO 11','TELEFONO 12','TELEFONO 13','TELEFONO 14','TELEFONO 15','TELEFONO 16','TELEFONO 17','TELEFONO 18','TELEFONO 19','TELEFONO 20','TELEFONO 21','TELEFONO 22','MOTIVO 1','MOTIVO 2','MOTIVO 3','
VENDEDOR','TIPIFICACION','DETALLE TIPIFICACION','BANCO','TIPO TARJETA FoP','FRANQUICIA F','ALIADO P','NOTA BANCO EMISOR','VALOR COMPRA','No CUOTAS','TELEFONO','FECHA','ESTADO REGISTRO','USUARIO'));

foreach($column_array  as $val) {
    fputcsv($outputBuffer, $val);
}
//cerramos el wrapper
fclose($outputBuffer);
?>
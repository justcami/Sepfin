<?php

include ('conexion.php');
error_reporting (0);

$busqueda=$_POST['busqueda2'];

if(isset($_POST['buscar']))
{
	$pol = "WHERE cedula LIKE '%".$busqueda."%' OR codigo LIKE '%".$busqueda."%' OR codigosobre LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR observaciones LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tipitificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%' OR hora LIKE '%".$busqueda."%' OR fecha LIKE '%".$busqueda."%' OR asesor LIKE '%".$busqueda."%'";
}

$sql = "select * from agendamientos $pol ";
$result = $con -> query($sql);

if(!$result )
{
 	die('Ocurrio un error al obtener los valores de la base de datos: agendamientos');
}

while($row = $result->fetch_assoc())
{
	unset($row['idagendamiento']);
	unset($row['EstadoRegistro']);
	$column_array[] = $row;
}

//cabeceras para descarga
header("Content-Type: text/html; charset=utf8");
header("Content-Transfer-Encoding: utf8");
header("Content-disposition: attachment; filename=\"ReporteAgendamientos.csv\""); 

//preparar el wrapper de salida
$outputBuffer = fopen("php://output", 'w');

//volcamos el contenido del array en formato csv
fputcsv($outputBuffer, array('CEDULA', 'CODIGO', 'CODIGO SOBRE', 'NOMBRE', 'ESTADO', 'DIRECCION', 'BARRIO', 'LOCALIDAD', 'OBSERVACIONES', 'TELEFONO 1', 'TELEFONO 2','TELEFONO 3', 'MOTIVO 1', 'MOTIVO 2', 'MOTIVO 3', 'MOTIVO 4', 'MOTIVO 5', 'VENDEDOR', 'TIPIFICACION', 'DETALLE TIPIFICACION', 'FECHA', 'HORA', 'ASESOR', 'BASE'));

foreach($column_array as $val) 
{
    fputcsv($outputBuffer, $val);
}

//cerramos el wrapper
fclose($outputBuffer);

?>
<?php

include ('conexion.php');
error_reporting (0);

$busqueda=$_POST['busqueda2'];

if(isset($_POST['buscar']))
{
	$pol = "WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR cupo60 LIKE '%".$busqueda."%' OR cupo48 LIKE '%".$busqueda."%' OR tasa LIKE '%".$busqueda."%' OR cupoaprob LIKE '%".$busqueda."%' OR plazoaprob LIKE '%".$busqueda."%' OR cuota LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR fijoreal LIKE '%".$busqueda."%' OR celureal LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR tel8 LIKE '%".$busqueda."%' OR tel9 LIKE '%".$busqueda."%' OR tel10 LIKE '%".$busqueda."%' OR tel11 LIKE '%".$busqueda."%' OR tel12 LIKE '%".$busqueda."%' OR tel13 LIKE '%".$busqueda."%' OR tel14 LIKE '%".$busqueda."%' OR tel15 LIKE '%".$busqueda."%' OR tel16 LIKE '%".$busqueda."%' OR tel17 LIKE '%".$busqueda."%' OR tel18 LIKE '%".$busqueda."%' OR tel19 LIKE '%".$busqueda."%' OR tel20 LIKE '%".$busqueda."%' OR tel21 LIKE '%".$busqueda."%' OR tel22 LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%')";
}

$sql = "select * from prestamospersonales $pol";
$result = $con -> query($sql);

if(!$result )
{
 	die('Ocurrio un error al obtener los valores de la base de datos: prestamospersonales');
}

while ($row = $result->fetch_assoc())
{
	unset($row['idproducto']);
	unset($row['EstadoRegistro']);
	$column_array[] = $row;
}

//cabeceras para descarga
header("Content-Type: text/html; charset=utf8");
header("Content-Transfer-Encoding: utf8");
header("Content-disposition: attachment; filename=\"ReportePrestamosPersonales.csv\""); 

//preparar el wrapper de salida
$outputBuffer = fopen("php://output", 'w');

//volcamos el contenido del array en formato csv
fputcsv($outputBuffer, array('CEDULA', 'NOMBRE', 'CUPO 60', 'CUPO 48', 'TASA', 'CUPO APROBADO', 'PLAZO APROBADO', 'CUOTA', 'DIRECCION', 'BARRIO', 'LOCALIDAD', 'FIJO', 'CELULAR', 'TELEFONO 1', 'TELEFONO 2', 'TELEFONO 3', 'TELEFONO 4', 'TELEFONO 5', 'TELEFONO 6', 'TELEFONO 7', 'TELEFONO 8', 'TELEFONO 9', 'TELEFONO 10', 'TELEFONO 11', 'TELEFONO 12', 'TELEFONO 13','TELEFONO 14','TELEFONO 15','TELEFONO 16', 'TELEFONO 17', 'TELEFONO 18', 'TELEFONO 19', 'TELEFONO 20', 'TELEFONO 21', 'TELEFONO 22', 'MOTIVO 1', 'MOTIVO 2', 'MOTIVO 3', 'VENDEDOR', 'TIPIFICACION', 'DETALLE TIPIFICACION', 'FECHA', 'HORA', 'VENDEDOR'));

foreach($column_array as $val) 
{
    fputcsv($outputBuffer, $val);
}

//cerramos el wrapper
fclose($outputBuffer);

?>
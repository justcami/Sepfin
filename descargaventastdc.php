<?php

include ('conexion.php');

error_reporting (0);

$busqueda=$_POST['busqueda2'];

if(isset($_POST['buscar']))
{
	$pol = "WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%')";
}

$sql = "select * from ventadetarjetas $pol";
$result = $con -> query($sql);

if(!$result )
{
 	die('Ocurrio un error al obtener los valores de la base de datos: ventadetarjetas');
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
header("Content-disposition: attachment; filename=\"ReporteVentasTDC.csv\""); 

//preparar el wrapper de salida
$outputBuffer = fopen("php://output", 'w');

//volcamos el contenido del array en formato csv
fputcsv($outputBuffer, array('CEDULA', 'NOMBRE', 'ESTADO', 'TELEFONO 1', 'TELEFONO 2', 'TELEFONO 3', 'TELEFONO 4', 'TELEFONO 5', 'TELEFONO 6', 'TELEFONO 7', 'DIRECCION', 'BARRIO', 'LOCALIDAD', 'MOTIVO 1', 'MOTIVO 2', 'MOTIVO 3', 'VENDEDOR', 'TIPIFICACION', 'DETALLE TIPIFICACION', 'FECHA', 'BASE', 'USUARIO'));
foreach($column_array as $val) 
{
    fputcsv($outputBuffer, $val);
}

//cerramos el wrapper
fclose($outputBuffer);

?>
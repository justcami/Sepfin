<?php
include ('conexion.php');
error_reporting (0);
$busqueda=$_POST['busqueda2'];
if(isset($_POST['buscar']))
{
	$pol = "ventadetarjetas WHERE cedula LIKE '%".$busqueda."%'";
}
$sql = "select * from $pol";
$result = $con -> query($sql);
if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ventadetarjetas');
		}
		while($row = $result->fetch_assoc()){
        $column_array[] = $row;
		}
		//cabeceras para descarga
header("Content-Type: text/html; charset=utf8");
header("Content-Transfer-Encoding: utf8");
header("Content-disposition: attachment; filename=\"ReporteVentasTDC.csv\""); 
//preparar el wrapper de salida
$outputBuffer = fopen("php://output", 'w');
//volcamos el contenido del array en formato csv
    fputcsv($outputBuffer, array('No REGISTRO','CEDULA','NOMBRES','TASA','EXTRACUPO','CUPO DISPONIBLE','Potencial TDC','TELEFONO 1','TELEFONO 2','TELEFONO 3','TELEFONO 4','TELEFONO 5','TELEFONO 6','TELEFONO 7','TELEFONO 8','TELEFONO 9','TELEFONO 10','TELEFONO 11','TELEFONO 12','TELEFONO 13','TELEFONO 14','TELEFONO 15','TELEFONO 16','TELEFONO 17','TELEFONO 18','TELEFONO 19','TELEFONO 20','TELEFONO 21','TELEFONO 22','MOTIVO 1','MOTIVO 2','MOTIVO 3','
VENDEDOR','TIPIFICACION','DETALLE TIPIFICACION','BANCO','TIPO TARJETA FoP','FRANQUICIA F','ALIADO P','NOTA BANCO EMISOR','VALOR COMPRA','No CUOTAS','TELEFONO','FECHA','ESTADO REGISTRO','USUARIO'));
foreach($column_array as $val) {
    fputcsv($outputBuffer, $val);
}
//cerramos el wrapper
fclose($outputBuffer);
?>
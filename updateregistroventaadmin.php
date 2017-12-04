<?php
include("seguridad.php");
include ('conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$cedula = $_POST['Cedula'];
$nombre = $_POST['Nombre'];
$estado = $_POST['estado'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$tel3 = $_POST['tel3'];
$tel4 = $_POST['tel4'];
$tel5 = $_POST['tel5'];
$tel6 = $_POST['tel6'];
$tel7 = $_POST['tel7'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$motivo1 = $_POST['motivo1'];
$motivo2 = $_POST['motivo2'];
$motivo3 = $_POST['motivo3'];
$Tipificacion = $_POST['Tipificacion'];
$DetalleTipi = $_POST['detalletipi'];
$fecha = date("Y-m-d h:i:s A");
$base = $_POST['base'];

$up = $con -> query ("UPDATE ventadetarjetas SET idproducto='$idproducto',cedula='$cedula',nombre='$nombre',estado='$estado',tel1='$tel1',tel2='$tel2',tel3='$tel3',tel4='$tel4',tel5='$tel5',tel6='$tel6',tel7='$tel7',direccion='$direccion',barrio='$barrio',localidad='$localidad',tipificacion='$Tipificacion',detalletipi='$DetalleTipi',fecha='$fecha',base='$base'
WHERE idproducto='$idproducto'");

if ($up) {
echo
		"<script>
		alert('Registro Actualizado Exitosamente');
        location.href='reporteventastdc.php';
        </script>";
}else{
echo
		"<script>
		alert('Epa!! Algo Paso, no se pudo Actualizar el Registro');
        location.href='reporteventastdc.php';
        </script>";	
}
?>
<?php
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');

$idagendamiento = $_REQUEST['AgendamientoID'];
$cedula = $_POST['Cedula'];
$codigo = $_POST['codigo'];
$codigosobre = $_POST['codigosobre'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$observaciones = $_POST['observaciones'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$tel3 = $_POST['tel3'];
$motivo1 = $_POST['motivo1'];
$motivo2 = $_POST['motivo2'];
$motivo3 = $_POST['motivo3'];
$motivo4 = $_POST['motivo4'];
$motivo5 = $_POST['motivo5'];
$tipitificacion = $_POST['Tipificacion'];
$DetalleTipi = $_POST['detalletipi'];
$fecha = date("Y-m-d h:i:s A");
$hora = $_POST['hora'];
$asesor = $_POST['asesor'];
$base = $_POST['base'];
$Libre = "";

$up = $con -> query ("UPDATE agendamientos SET cedula='$cedula',nombre='$nombre',estado='$estado',direccion='$direccion',barrio='$barrio',localidad='$localidad',tel1='$tel1',tel2='$tel2',tel3='$tel3',motivo1='$motivo1',motivo2='$motivo2',motivo3='$motivo3',motivo4='$motivo4',motivo5='$motivo5',tipitificacion='$tipitificacion',detalletipi='$DetalleTipi',fecha='$fecha',hora='$hora',asesor='$asesor',base='$base',EstadoRegistro='$Libre',Usuario='$nuusuario' WHERE idagendamiento='$idagendamiento'");

if ($up) {
echo
		"<script>
		alert('Agendamiento Actualizado Exitosamente');
        location.href='agendamientos.php';
        </script>";
} else{
	echo $idagendamiento;
	echo "<br>";
	echo $cedula;
	echo "<br>";
	echo $codigosobre;
}
?>
<?php
include ('conexion.php');

$idagendamiento = $_REQUEST['idagendamientor'];
$Libre="";

$up = $con -> query ("UPDATE agendamientos SET EstadoRegistro='$Libre'
WHERE idagendamiento='$idagendamiento'");

if ($up) {
echo
		"<script>
        location.href='/Sepfin/ventadetarjetas/agendamientos.php';
        </script>";
}else {
echo
		"<script>
		alert('Epa!! Algo Paso');
        location.href='/Sepfin/ventadetarjetas/agendamientos.php';
        </script>";	
}
?>
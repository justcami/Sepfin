<?php
include ('conexion3.php');

$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['NuevaContrasena'];
$sumalogin = 1;

$up = $con3 -> query ("UPDATE usuarios SET contrasena='$pass', cuentalogin='$sumalogin'
WHERE usuario='$usuario'");

if ($up) {

	echo
		"<script>
        alert('Contraseña Modificada Exitosamente');
        location.href='index.php';
        </script>";
}else{
    
	echo "epa";
		"<script>
        alert('No se pudo modificar la Contraseña');
        location.href='index.php';
        </script>"; 
}
?>
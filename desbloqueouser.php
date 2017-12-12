<?php
include ('seguridad.php');
include ('conexion3.php');

$usuario = $_REQUEST['usuario'];
				$up = $con3 -> query ("UPDATE usuarios SET cuentalogerroneo='0'
				WHERE usuario='$usuario'");

if ($up) {
				echo "<script>
				alert('Se desbloqueo el usuario');
				location.href='usuarios.php';
				</script>";
				}
		
		else{
		
		echo 
		"<script>
        alert('No se pudo desbloquear el usuario');
        location.href='usuarios.php';
        </script>"; 
}
?>
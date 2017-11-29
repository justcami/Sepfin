<?php
include("seguridad.php");
include ('conexion3.php');
include ('conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$tel = $_POST['Telefono'];
$Producto = $_REQUEST['Producto'];


$up = $con -> query ("UPDATE $Producto SET idproducto='$idproducto',Nombre='$nombre',Apellido='$apellido',Telefono='$tel'
WHERE idproducto='$idproducto'");
if ($up) {

	echo 
		"<script>
        alert('Registro Actualizado Exitosamente');
        location.href='productos.php';
        </script>";
}else{
    
	echo 
		"<script>
       alert('No se pudo actualizar el Registro');
        location.href='productos.php';
        </script>"; 
}
?>
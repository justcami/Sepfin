<?php
include ('conexion.php');

$producto = $_REQUEST['productor'];
$idproducto = $_REQUEST['idproductor'];
$Libre="";

$up = $con -> query ("UPDATE $producto SET EstadoRegistro='$Libre'
WHERE idproducto='$idproducto'");

if ($up) {
echo
		"<script>
        location.href='gestion.php';
        </script>";
}else{
    
	echo "epa";
		"<script>
        alert('Algo Paso');
        location.href='gestion.php';
        </script>"; 
}
?>
<?php
include ('conexion.php');

$producto = $_REQUEST['productor'];
$idproducto = $_REQUEST['idproductor'];
$Libre="";

$phrase = $producto;
				$espacio = array(" ");
				$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

$up = $con -> query ("UPDATE $newphrase SET EstadoRegistro='$Libre'
WHERE idproducto='$idproducto'");

if ($up) {
echo
		"<script>
        location.href='gestion.php';
        </script>";
}else{
    
	echo
		"<script>
        alert('Epa!! Algo Paso');
        location.href='gestion.php';
        </script>"; 
}
?>
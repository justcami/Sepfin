<?php
include ('conexion.php');

$producto = $_REQUEST['productor'];
$idproducto = $_REQUEST['idproductor'];
$Libre="";

$phrase = $producto;
				$espacio = array(" ");
				$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

$Prestamos = "Prestamos Personales";
$Compra = "Compra de Cartera";
$Venta = "Venta de Tarjetas";

$up = $con -> query ("UPDATE $newphrase SET EstadoRegistro='$Libre'
WHERE idproducto='$idproducto'");

if ($up) {
	if($producto==$Prestamos){
echo
		"<script>
        location.href='/Sepfin/prestamospersonales/gestion.php';
        </script>";
} else if($producto==$Compra){
echo
		"<script>
        location.href='/Sepfin/compradecartera/gestion.php';
        </script>";	
} else if($producto==$Venta){
echo
		"<script>
        location.href='/Sepfin/ventadetarjetas/gestion.php';
        </script>";	
}
		}else{
    if($producto==$Prestamos){
echo
		"<script>
        alert('Epa!! Algo Paso');
        location.href='/Sepfin/prestamospersonales/gestion.php';
        </script>";
} else if($producto==$Compra){
echo
		"<script>
		alert('Epa!! Algo Paso');
        location.href='/Sepfin/compradecartera/gestion.php';
        </script>";	
} else if($producto==$Venta){
echo
		"<script>
		alert('Epa!! Algo Paso');
        location.href='/Sepfin/ventadetarjetas/gestion.php';
        </script>";	
} 
}
?>
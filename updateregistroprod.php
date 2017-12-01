<?php
include("seguridad2.php");
include ('conexion3.php');
include ('conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$tel = $_POST['Telefono'];
$Libre = "";

//Buscar la tabla asignada al usuario
$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.
					
$phrase  = $rowproducto;
$espacio = array(" ");
$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);					

$up = $con -> query ("UPDATE $newphrase SET idproducto='$idproducto',Nombre='$nombre',Apellido='$apellido',Telefono='$tel',EstadoRegistro='$Libre', Usuario='$user'
WHERE idproducto='$idproducto'");
if ($up) {

echo "<script>
        alert('Registro Actualizado Exitosamente');
        location.href='gestion.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo actualizar el Registro');
        location.href='gestion.php';
        </script>"; 
}}}
?>
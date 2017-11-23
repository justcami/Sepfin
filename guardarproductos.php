<?php
include("seguridad.php");
include ('conexion.php');

$producto = $_POST['NombredeProducto'];
$descripcion = $_POST['Descripcion'];

$ins = $con -> query ("INSERT INTO productos (idproducto,Producto,Descripcion) VALUES ('','$producto','$descripcion')");

if ($ins) {

echo "<script>
        alert('Producto Asignado Exitosamente');
        location.href='index.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo asignar el producto');
        location.href='index.php';
        </script>"; 
}

?>

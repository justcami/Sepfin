<?php
include("seguridad.php");
include ('conexion.php');

$producto = $_POST['NombredeProducto'];
$descripcion = $_POST['Descripcion'];
$ins = $con -> query ("INSERT INTO productos (idproducto,Producto,Descripcion) VALUES ('','$producto','$descripcion')");

$tabla = "create table ".$producto."(
idproducto int(11) PRIMARY KEY AUTO_INCREMENT,
Nombre varchar(200) NOT NULL,
Apellido varchar(200) NOT NULL,
Telefono varchar(12) NOT NULL);";
$crear_tabla = $con -> query ($tabla);

if ($crear_tabla) {

echo "<script>
        alert('Producto Creado Exitosamente');
        location.href='main.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo crear el producto');
        location.href='main.php';
        </script>"; 
}
?>
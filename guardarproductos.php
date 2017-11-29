<?php
include("seguridad.php");
include ('conexion.php');

$producto = $_POST['NombredeProducto'];
$descripcion = $_POST['Descripcion'];


//Validamos si el producto ya existe
$userregis = $con -> query ("SELECT * FROM productos WHERE Producto='$producto'");
$user_cnt = $userregis->num_rows;
if ($user_cnt > 0) 
			{
		echo "<script>
        alert('Producto Ya Existe');
        location.href='productos.php'; 
        </script>";
		die; //Si el producto existe muestra un mensaje y vuelve a productos.php
			}else //Si el producto no existe, entonces continua a crearlo
			{
			$ins = $con -> query ("INSERT INTO productos (idproducto,Producto,Descripcion) VALUES ('','$producto','$descripcion')");
			}
$tabla = "create table ".$producto."(
idproducto int(11) PRIMARY KEY AUTO_INCREMENT,
Nombre varchar(200) NOT NULL,
Apellido varchar(200) NOT NULL,
Telefono varchar(12) NOT NULL);";
$crear_tabla = $con -> query ($tabla);

if ($crear_tabla) {

echo "<script>
        alert('Producto Creado Exitosamente');
        location.href='productos.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo crear el producto');
        location.href='productos.php';
        </script>"; 
}
?>
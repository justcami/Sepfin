<?php
include("seguridad.php");
include ('conexion.php');

$producto = $_POST['NombredeProducto'];
$descripcion = $_POST['Descripcion'];


//Validamos si el producto ya existe
$prodregis = $con -> query ("SELECT * FROM productos WHERE Producto='$producto'");
$user_cnt = $prodregis->num_rows;
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

			$phrase = $producto;
				$espacio = array(" ");
				$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);
			
$tabla = "create table ".$newphrase."(
idproducto int(11) PRIMARY KEY AUTO_INCREMENT,
cedula varchar(20) NOT NULL,
nombre varchar(30) NOT NULL,
cupo60 varchar(20) NOT NULL,
cupo48 varchar(20) NOT NULL,
tasa varchar(10) NOT NULL,
cupoaprob varchar(20) NOT NULL,
plazoaprob varchar(20) NOT NULL,
cuota varchar(20) NOT NULL,
direccion varchar(50) NOT NULL,
barrio varchar(50) NOT NULL,
localidad varchar(50) NOT NULL,
fijoreal varchar(20) NOT NULL,
celureal varchar(20) NOT NULL,
tel1 varchar(20) NOT NULL,
tel2 varchar(20) NOT NULL,
tel3 varchar(20) NOT NULL,
tel4 varchar(20) NOT NULL,
tel5 varchar(20) NOT NULL,
tel6 varchar(20) NOT NULL,
tel7 varchar(20) NOT NULL,
tel8 varchar(20) NOT NULL,
tel9 varchar(20) NOT NULL,
tel10 varchar(20) NOT NULL,
tel11 varchar(20) NOT NULL,
tel12 varchar(20) NOT NULL,
tel13 varchar(20) NOT NULL,
tel14 varchar(20) NOT NULL,
tel15 varchar(20) NOT NULL,
tel16 varchar(20) NOT NULL,
tel17 varchar(20) NOT NULL,
tel18 varchar(20) NOT NULL,
tel19 varchar(20) NOT NULL,
tel20 varchar(20) NOT NULL,
tel21 varchar(20) NOT NULL,
tel22 varchar(20) NOT NULL,
motivo1 varchar(20) NOT NULL,
motivo2 varchar(20) NOT NULL,
motivo3 varchar(20) NOT NULL,
vendedor varchar(20) NOT NULL,
tipificacion varchar(20) NOT NULL,
detalletipi varchar(100) NOT NULL,
fecha date NOT NULL,
EstadoRegistro varchar(20) NOT NULL,
Usuario varchar(20) NOT NULL);";

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
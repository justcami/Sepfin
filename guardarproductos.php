<?php
include("seguridad.php");
include ('conexion.php');

$producto = $_POST['NombredeProducto'];
$descripcion = $_POST['Descripcion'];
$ins = $con -> query ("INSERT INTO productos (idproducto,Producto,Descripcion) VALUES ('','$producto','$descripcion')");

$enlace = mysql_connect('localhost','root','');
mysql_select_db('sepfin',$enlace);
$tabla = "create table ".$producto."(
idproducto int(11) PRIMARY KEY AUTO_INCREMENT,
Nombre varchar(200) NOT NULL,
Apellido varchar(200) NOT NULL,
Telefono varchar(12) NOT NULL);";
$crear_tabla =mysql_query($tabla,$enlace);
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

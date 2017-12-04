<?php
include("seguridad.php");
include ('conexion3.php');

$id_usuario = $_POST['id_usuario2'];
$nombre = $_POST['NombreyApellido'];
$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
$perfil = $_POST['perfil'];
$producto = $_POST['Producto'];

if(is_numeric($producto)) {

echo $producto;
$nombreproducto = $con -> query ("SELECT * FROM productos WHERE idproducto='$producto'");
$row_cnt = $nombreproducto->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $nombreproducto->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];					

if ($perfil=="Administrador"){
	$perfiladmin=0;
}else{
$perfiladmin=1;
}

$up = $con3 -> query ("UPDATE usuarios SET id_usuario='$id_usuario',Nombre='$nombre',usuario='$usuario',contrasena='$passw',Nivel_Usuario='$perfiladmin',producto='$rowproducto' 
WHERE id_usuario='$id_usuario'");

}}} else{

if ($perfil=="Administrador"){
	$perfiladmin=0;
}else{
$perfiladmin=1;
}	
	
$up = $con3 -> query ("UPDATE usuarios SET id_usuario='$id_usuario',Nombre='$nombre',usuario='$usuario',contrasena='$passw',Nivel_Usuario='$perfiladmin',producto='$producto' 
WHERE id_usuario='$id_usuario'");	
}

if ($up) {

echo "<script>
        alert('Usuario Actualizado Exitosamente');
        location.href='usuarios.php/';
        </script>";
}else{
    echo "<script>
        alert('No se pudo actualizar el Usuario');
        location.href='usuarios.php/';
        </script>"; 
}
?>
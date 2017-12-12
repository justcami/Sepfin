<?php
include("seguridad.php");
?>
<?php 
include ('conexion3.php');

$nombre = $_POST['nombrecompleto'];
$usuario = $_POST['usuario'];
$passw = $_POST['password'];
$perfil = $_POST['perfil'];
$producto = $_POST['Producto'];

//Validamos si el usuario ya esta registrado
$userregis = $con3 -> query ("SELECT * FROM usuarios WHERE usuario='$usuario'");
$user_cnt = $userregis->num_rows;
if ($user_cnt > 0) 
			{
		echo "<script>
        alert('Usuario Ya Existe');
        location.href='crearusuarios.php'; 
        </script>";
		die; //Si el usuario existe muestra un mensaje y vuelve a crearusuarios.php
			}else
			{
//Si el usuario no existe, entonces continua a crearlo
$ins2 = $con -> query ("SELECT * FROM productos WHERE idproducto='$producto'");
			$row_cnt = $ins2->num_rows;}
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $ins2->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
if ($perfil=="Administrador"){
$perfiladmin=0;
}else{
$perfiladmin=1;
}

//Una vez que tenemos todos los datos convertidos, los introducimos en la base de datos
$ins = $con3 -> query ("INSERT INTO usuarios (id_usuario,Nombre,usuario,contrasena,Nivel_Usuario,producto) VALUES ('','$nombre','$usuario','$passw','$perfiladmin','$rowproducto')");

if ($ins) {

echo "<script>
        alert('Usuario Creado Exitosamente');
        location.href='usuarios.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo crear el Usuario');
        location.href='usuarios.php';
        </script>"; 
}
}
}
else{ //Si no se selecciona ningun producto para el usuario el lo deja vacio en la base de datos
$rowproducto = "";
if ($perfil=="Administrador"){
$perfiladmin=0;
}else{
$perfiladmin=1;
}

$ins = $con3 -> query ("INSERT INTO usuarios (id_usuario,Nombre,usuario,contrasena,Nivel_Usuario,producto) VALUES ('','$nombre','$usuario','$passw','$perfiladmin','$rowproducto')");

if ($ins) {

echo "<script>
        alert('Usuario Creado Exitosamente');
        location.href='usuarios.php';
        </script>";
}else{
    echo "<script>
        alert('No se pudo crear el Usuario');
        location.href='usuarios.php';
        </script>"; 
}
}	
?>
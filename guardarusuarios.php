<?php
include("seguridad.php");
?>
<?php 
include ('conexion3.php');

$nombre = $_POST['nombrecompleto'];
$usuario = $_POST['usuario'];
$passw = $_POST['password'];
$perfil = $_POST['perfil'];

if ($perfil=="Administrador"){
	$perfiladmin=0;
}else{
$perfiladmin=1;
}

$ins = $con -> query ("INSERT INTO usuarios (id_usuario,Nombre,usuario,contrasena,Nivel_Usuario) VALUES ('','$nombre','$usuario','$passw','$perfiladmin')");

if ($ins) {

echo "<script>
        alert('Usuario Creado Exitosamente');
        location.href='../Sepfin/usuarios.php/';
        </script>";
}else{
    echo "<script>
        alert('No se pudo crear el Usuario');
        location.href='../Sepfin/usuarios.php/';
        </script>"; 
}

?>
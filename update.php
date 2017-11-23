<?php
include("seguridad.php");
include ('conexion3.php');

$id_usuario = $_POST['id_usuario2'];
$nombre = $_POST['NombreyApellido'];
$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
$perfil = $_POST['nivel'];

$up = $con -> query ("UPDATE usuarios SET id_usuario='$id_usuario',Nombre='$nombre',usuario='$usuario',contrasena='$passw',Nivel_Usuario='$perfil' 
WHERE id_usuario='$id_usuario'");
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
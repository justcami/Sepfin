<?php 
include("seguridad.php");
include 'conexion3.php';

$id_usuario = $_REQUEST['id_usuario'];
$del = $con ->query("DELETE FROM usuarios WHERE id_usuario='$id_usuario' ");

if ($del) {
    echo "<script>
        location.href='usuarios.php/';
        </script>";
}else{
    echo "<script>
        alert('El registro no pudo ser eliminado');
        location.href='usuarios.php/';
        </script>"; 
}
?>
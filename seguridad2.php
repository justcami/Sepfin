<?php

session_start();?>
<?php include 'conexion.php';
$compra="Compra de Cartera";
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null || 
   !isset($_SESSION["pass"]) || $_SESSION["pass"]==null ||
   !isset($_SESSION["producto"]) || $_SESSION["producto"]!=$compra
)
   {
        print "<script>alert(\"Acceso Invalido\");window.location='/Sepfin/index.php';</script>";
   }
   
   $user = $_SESSION["usuario"];
   $pass = $_SESSION["pass"];
   $nuusuario = $_SESSION['Nombre'];   
?>
<?php

session_start();?>
<?php include 'conexion.php'; 
$prestamos="Prestamos Personales";
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null || 
   !isset($_SESSION["pass"]) || $_SESSION["pass"]==null ||
   !isset($_SESSION["producto"]) || $_SESSION["producto"]!=$prestamos
)
   {
        print "<script>alert(\"Acceso Invalido\");window.location='/Sepfin/index.php';</script>";
   }
   
   $user = $_SESSION["usuario"];
   $pass = $_SESSION["pass"];
   $nuusuario = $_SESSION['Nombre'];  
?>
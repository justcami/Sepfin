<?php

session_start();?>
<?php include 'conexion.php'; 
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null || 
   !isset($_SESSION["pass"]) || $_SESSION["pass"]==null
)
   {
        print "<script>alert(\"Acceso Invalido\");window.location='index.php';</script>";
   }
   
   $user = $_SESSION["usuario"];
   $pass = $_SESSION["pass"];
   $nuusuario = $_SESSION['Nombre'];  
?>
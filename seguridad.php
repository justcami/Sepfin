<?php

session_start();?>
<?php include 'conexion.php';
$nivel=0; 
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null || 
   !isset($_SESSION["pass"]) || $_SESSION["pass"]==null ||
   !isset($_SESSION["nuser"]) || $_SESSION["nuser"]!=$nivel
)
   {
        print "<script>alert(\"Acceso Invalido\");window.location='index.php';</script>";
   }
   
   $user = $_SESSION["usuario"];
   $pass = $_SESSION["pass"];
   $nuss = $_SESSION["nuser"];
   $nuusuario = $_SESSION['Nombre']; 
?>
<?php

session_start();?>
<?php include 'conexion.php'; 

if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null || 
   !isset($_SESSION["pass"]) || $_SESSION["pass"]==null ||
   !isset($_SESSION["nuser"]) || $_SESSION["nuser"]>1
)
   {
        print "<script>alert(\"Acceso Invalido\");window.location='index.php';</script>";
   }
   
   $user = $_SESSION["usuario"];
   $pass = $_SESSION["pass"];
   $nuss = $_SESSION["nuser"];
?>
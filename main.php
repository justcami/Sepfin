<?php
include("seguridad.php");
?>
<?php 
            echo "<b>Bienvenido: </b>";
            echo $user."<br>";
            ?>
            <a href="logout.php">Cerrar Sesion</a><br><br><br>
			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRM SEPFIN IDENTIFIQUESE</title>
<link href="css2/estilo.css" rel="stylesheet">
<script src="js2/jquery.js"></script>
<script src="js2/myjava.js"></script>   
   </head>
   <body>
       
<center>
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">CRM SEPFIN- SELECCIONE</h3>
</center>			
   <p>&nbsp;</p>
   <table width="200" border="1" align="left">
     <tr align="center">
       <th scope="col"><a href="productos.php">Productos</a></th>
     </tr>
	 <tr align="center"> 
       <th scope="col"><a href="agendas.php">Agendas</a></th>       
     </tr>
	 <tr align="center"> 
       <th scope="col" width="70%"><a href="usuarios.php/">Usuarios</a></th>      
     </tr>
   </table>
</body>
</html>
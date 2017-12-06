<?php
include("seguridad.php");
?>
<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
            <a href="logout.php">Cerrar Sesion</a><br><br><br>
			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<style>
<!--
.inputcentrado {
	text-align: center;
	background-color:LAVENDER;
   }
   
table tr:nth-child(even) {
	background-color: #eee;
}
 
table tr:nth-child(odd) {
	background-color: #fff;
}
table {
	width: auto;
	text-align: center;
	font-size: 17px;
}
-->
</style>
<title>CRM SEPFIN</title>
</head>
  
  <body>
       
<center>
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">CRM SEPFIN- SELECCIONE</h3>
</center>			
   <p>&nbsp;</p>
   <table border="1" align="left">
     <tr align="center">
       <th scope="col"><a href="productos.php">Productos</a></th>
     </tr>
	 <tr align="center">
       <th scope="col"><a href="reporteagendamientos.php">Agendamientos</a></th>
     </tr>
	 <tr align="center"> 
       <th scope="col" width="70%"><a href="usuarios.php/">Usuarios</a></th>      
     </tr>
   </table>
</body>
</html>
<?php include("templates/footer.php"); ?>
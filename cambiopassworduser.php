<?php 
include 'conexion3.php';
include 'conexion.php';
error_reporting (0);

	$usuario =$_REQUEST['usuario'];
	$sql = "select * from usuarios WHERE usuario='$usuario'";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cambio de contraseña</title>
   </head>
   <body> 
   <header>
<center>
   <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <p> Cambio de Contraseña </p>
   </header>
</center>   		
       <form id="formcambiopass" name="formcambiopass" action="updatepassuser.php" method="post">

	   
	   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre</th>
            <th>Nueva Contraseña</th>
			<th>Enviar</th>
                 <?php
		$result = $con3->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: Usuarios');
		}
		while ($fila = $result->fetch_assoc())
		{			
         ?>
		<tr>
            <td align="cente"><input type="text" name="Nombre" value="<?php echo $fila['Nombre']?>" readonly="readonly"</td>
			<td><input type="password" name="NuevaContrasena" placeholder="Nueva Contraseña" required></td>
			<input type="hidden" name="usuario" value="<?php echo $fila['usuario']?>"</input>
			
			<td align="center"><input type="submit" value="Enviar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
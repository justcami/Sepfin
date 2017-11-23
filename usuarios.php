<?php
include("seguridad.php");
include ('conexion3.php');
?>
<?php 
            echo "<b>Bienvenido: </b>";
            echo $user."<br>";	
            ?>
            <a href="../logout.php">Cerrar Sesion</a><br>
			<a href="../main.php">Regresar al inicio</a><br><br><br>
			
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
            <img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">USUARIOS SEPFIN</h3>
</center>			
   <p>&nbsp;</p>
   <table width="200" border="1" align="left">
     <tr align="center"> 
       <th scope="col" width="70%"><a href="../crearusuarios.php/">Crear Nuevos Usuarios</a></th>      
     </tr>
   </table><br><br>
      
        <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>RECORD DE USUARIOS</strong></font></td>
            </tr>
        </table> <br>
		
        <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre`</th>
            <th>Usuario</th>
            <th>Contrasena</th>
            <th>Nivel Usuario</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <?php
            $sel = $con -> query("SELECT * FROM usuarios");
            while ($fila = $sel ->fetch_assoc()){                
            ?>
        <tr>
            <td align="cente"><?php echo $fila['Nombre'] ?></td>
            <td align="center"><?php echo $fila['usuario'] ?></td>
            <td align="center"><?php echo $fila['contrasena'] ?></td>
            <td align="center"><?php echo $fila['Nivel_Usuario'] ?></td>
            <td align="center"><a href="../actualizar.php?id_usuario=<?php echo $fila['id_usuario'] ?>">EDITAR</a></td>
            <td align="center"><a href="../borrar.php?id_usuario=<?php echo $fila['id_usuario'] ?>">ELIMINAR</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
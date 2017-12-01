<?php 
include("seguridad.php");
include 'conexion3.php';
include 'conexion.php';
error_reporting (0);

$string =$_REQUEST['idproducto'];
$idproducto = $string[0];

$Producto = substr(strstr($_REQUEST['idproducto'], '='), 1);

$phrase  = $Producto;
$espacio = array(" ");
$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

$sql = "select * from $newphrase WHERE idproducto='$idproducto'";

?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Edicion de Registros</title>
   </head>
   <body>
<br>
            <a href="productos.php">Regresar Sin Realizar Cambios</a>   
   <header>
<center>
   <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <p> EDICION DE REGISTROS </p>
   </header>
</center>   
   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			<?php
			$str = strtoupper($Producto);
			echo $str;
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
       <form id="form1" name="form1" action="updateregistroprodadmin.php" method="post">

	   
	   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos:"'.$Producto.'"');
		}
		while ($fila = $result->fetch_assoc())
		{			
         ?>
		<tr>
            <td align="cente"><input type="text" name="Nombre" value="<?php echo $fila['Nombre']?>"</td>
            <td align="center"><input type="text" name="Apellido" value="<?php echo $fila['Apellido']?>"</td>
			<td align="center"><input type="text" name="Telefono" value="<?php echo $fila['Telefono']?>"</td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>?"</input>
			<input type="hidden" name="Producto" value="<?php echo $Producto?>"</input>

			<td align="center"><input type="submit" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
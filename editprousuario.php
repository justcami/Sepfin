<?php 
include("seguridad2.php");
include 'conexion3.php';
include 'conexion.php';
error_reporting (0);

$idproducto = $_REQUEST['idproducto'];

$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.	
$phrase = $rowproducto;
				$espacio = array(" ");
				$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);
					
$estadoregistro = $con -> query ("SELECT EstadoRegistro FROM $newphrase WHERE idproducto='$idproducto'");
			$row_cnt2 = $estadoregistro->num_rows;
			if ($row_cnt2 > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowestadoregistro = $estadoregistro->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowestadoregistro = $rowestadoregistro['EstadoRegistro'];
					#etc.
	
	if($rowestadoregistro=="Ocupado"){
	echo "<script>
        alert('El Registro esta en uso por otro Usuario');
        location.href='gestion.php';
        </script>";
			}else{	
	$sql = "select * from $newphrase WHERE idproducto='$idproducto'";
	$Ocupado="Ocupado";
	$up = $con -> query ("UPDATE $newphrase SET EstadoRegistro='$Ocupado' WHERE idproducto='$idproducto'");
			}}}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Edicion de Registros</title>
   </head>
   <body>
<br>

<form action="/Sepfin/dejarregistrolibre.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<input type="hidden" name="productor" method="post" value="<?php echo $rowproducto?>">
<input type="hidden" name="idproductor" method="post" value="<?php echo $idproducto?>">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

   <header>
   <?php }}  ?>
       <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <p> EDICION DE REGISTROS </p>
   </header>
   
   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			Su Producto Asignado es: <?php
			$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.
					$str = strtoupper($rowproducto);
					echo $str;
			}}
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
       <form id="form1" name="form1" action="updateregistroprod.php" method="post">

	   
	   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{			
         ?>
		<tr>
            <td align="cente"><input type="text" name="Nombre" value="<?php echo $fila['Nombre']?>"</td>
            <td align="center"><input type="text" name="Apellido" value="<?php echo $fila['Apellido']?>"</td>
			<td align="center"><input type="text" name="Telefono" value="<?php echo $fila['Telefono']?>"</td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"</input>

			<td align="center"><input type="submit" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
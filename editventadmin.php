<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$idproducto = $_REQUEST['idproducto'];	
$sql = "select * from ventadetarjetas WHERE idproducto='$idproducto'";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Edicion de Registros</title>
		
		<!--Centrar texto mostrado en un input text-->
<style type="text/css">
<!--
.inputcentrado {
	text-align: center;
	background-color:LAVENDER;
   }
-->
</style>

		<!--Centrar texto mostrado en un input text-->
<style type="text/css">
<!--
.selectencontrado {
	text-align: center;
	background-color:LIGHTSALMON;
   }
-->
</style>
   
</head>
   <body>
<br>

<form action="reporteventastdc.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

<center>
   <header>
       <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <b><p> EDICION DE REGISTROS </p></b>
   </header>
</center>
   
   <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			Esta Editando un Registro de: Ventas de Tarjetas de Credito
			</strong></font></td>
            </tr>
        </table> <br>
		
       <form id="form1" name="form1" action="updateregistroventaadmin.php" method="post">


<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
			<th>CEDULA</th>
            <th>NOMBRE</th>
			<th>ESTADO</th>
			<th>TELEFONO 1</th>
			<th>TELEFONO 2</th>
			<th>TELEFONO 3</th>
			<th>TELEFONO 4</th>
			<th>TELEFONO 5</th>
			<th>TELEFONO 6</th>
			<th>TELEFONO 7</th>
			<th>DIRECCION</th>
			<th>BARRIO</th>
			<th>LOCALIDAD</th>
			<th>MOTIVO 1</th>
			<th>MOTIVO 2</th>
			<th>MOTIVO 3</th>
			<th>TIPIFICACION</th>
			<th>DETALLE TIPIFICACION</th>
			<th>VENDEDOR</th>
			<th>FECHA EDICION</th>
			<th>BASE</th>
			<th>Actualizar</th>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{			
         ?>
		<tr align="center">
            <td align="center"><input type="text" style="text-align:center" name="Cedula" value="<?php echo $fila['cedula']?>"></td>
            <td align="center"><input type="text" style="text-align:center" name="Nombre" value="<?php echo $fila['nombre']?>"></td>
			<td align="center"><input type="text" name="estado" style="text-align:center" value="<?php echo $fila['estado']?>"></td>
			<td align="center"><input type="text" name="tel1" style="text-align:center" value="<?php echo $fila['tel1']?>"></td>
			<td align="center"><input type="text" name="tel2" style="text-align:center" value="<?php echo $fila['tel2']?>"></td>
			<td align="center"><input type="text" name="tel3" style="text-align:center" value="<?php echo $fila['tel3']?>"></td>
			<td align="center"><input type="text" name="tel4" style="text-align:center" value="<?php echo $fila['tel4']?>"></td>
			<td align="center"><input type="text" name="tel5" style="text-align:center" value="<?php echo $fila['tel5']?>"></td>
			<td align="center"><input type="text" name="tel6" style="text-align:center" value="<?php echo $fila['tel6']?>"></td>
			<td align="center"><input type="text" name="tel7" style="text-align:center" value="<?php echo $fila['tel7']?>"></td>
			<td align="center"><input type="text" name="direccion" style="text-align:center" value="<?php echo $fila['direccion']?>"></td>
			<td align="center"><input type="text" name="barrio" style="text-align:center" value="<?php echo $fila['barrio']?>"></td>
			<td align="center"><input type="text" name="localidad" style="text-align:center" value="<?php echo $fila['localidad']?>"></td>
			<td align="center"><input type="text" name="motivo1" style="text-align:center" value="<?php echo $fila['motivo1']?>"></td>
			<td align="center"><input type="text" name="motivo2" style="text-align:center" value="<?php echo $fila['motivo2']?>"></td>
			<td align="center"><input type="text" name="motivo3" style="text-align:center" value="<?php echo $fila['motivo3']?>"></td>
			<td align="center">
			<select name="Tipificacion" class="selectencontrado">
            <option><?php echo $fila['tipificacion']?></option>
            <option>ILOCALIZADO</option>
            <option>LLAMAR</option>
			<option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			<option>VENTA</option>
			</select>
			</td>
			<td align="center"><input type="text" name="detalletipi" style="text-align:center" value="<?php echo $fila['detalletipi']?>"></td>
			<td align="center"><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td align="center"><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d h:i:s A");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td align="center"><input type="text" name="base" style="text-align:center"></td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input>
			<td align="center"><input type="submit" style="text-align:center" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
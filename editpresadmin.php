<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$idproducto = $_REQUEST['idproducto'];

$sql = "select * from prestamospersonales WHERE idproducto='$idproducto'";

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

<form action="reporteprestamos.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
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
			Esta Editando un Registro de: Prestamos Personales
			</strong></font></td>
            </tr>
        </table> <br>
		
<form id="form1" name="form1" action="updateregistropresadmin.php" method="post">
<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
			<th>CEDULA</th>
            <th>NOMBRE</th>
            <th>CUPO_60 MESES</th>
			<th>CUPO_48 MESES</th>
			<th>TASA</th>
			<th>CUPO APROBADO</th>
			<th>PLAZO APROBADO</th>
			<th>CUOTA</th>
			<th>DIRECCION</th>
			<th>BARRIO</th>
			<th>LOCALIDAD</th>
			<th>FIJO REAL</th>
			<th>CELULAR REAL</th>
			<th>TELEFONO 1</th>
			<th>TELEFONO 2</th>
			<th>TELEFONO 3</th>
			<th>TELEFONO 4</th>
			<th>TELEFONO 5</th>
			<th>TELEFONO 6</th>
			<th>TELEFONO 7</th>
			<th>TELEFONO 8</th>
			<th>TELEFONO 9</th>
			<th>TELEFONO 10</th>
			<th>TELEFONO 11</th>
			<th>TELEFONO 12</th>
			<th>TELEFONO 13</th>
			<th>TELEFONO 14</th>
			<th>TELEFONO 15</th>
			<th>TELEFONO 16</th>
			<th>TELEFONO 17</th>
			<th>TELEFONO 18</th>
			<th>TELEFONO 19</th>
			<th>TELEFONO 20</th>
			<th>TELEFONO 21</th>
			<th>TELEFONO 22</th>
			<th>TIPIFICACION</th>
			<th>DETALLE TIPIFICACION</th>
			<th>VENDEDOR</th>
			<th>FECHA EDICION</th>
			<th>HORA</th>
			<th>ASESOR</th>
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
            <td align="center"><input type="text" style="text-align:center" name="Cedula" value="<?php echo $fila['cedula']?>"</td>
            <td align="center"><input type="text" style="text-align:center" name="Nombre" value="<?php echo $fila['nombre']?>"</td>
			<td align="center"><input type="text" style="text-align:center" name="Cupo60" value="<?php echo $fila['cupo60']?>"</td>
			<td align="center"><input type="text" style="text-align:center" name="Cupo48" value="<?php echo $fila['cupo48']?>"</td>
			<td align="center"><input type="text" style="text-align:center" name="Tasa" value="<?php echo $fila['tasa']?>"</td>
			<td align="center"><input type="text" name="Cupoaprob" style="text-align:center" value="<?php echo $fila['cupoaprob']?>"></td>
			<td align="center"><input type="text" name="plazoaprob" style="text-align:center" value="<?php echo $fila['plazoaprob']?>"></td>
			<td align="center"><input type="text" name="cuota" style="text-align:center" value="<?php echo $fila['cuota']?>"></td>
			<td align="center"><input type="text" name="direccion" style="text-align:center" value="<?php echo $fila['direccion']?>"></td>
			<td align="center"><input type="text" name="barrio" style="text-align:center" value="<?php echo $fila['barrio']?>"></td>
			<td align="center"><input type="text" name="localidad" style="text-align:center" value="<?php echo $fila['localidad']?>"></td>
			<td align="center"><input type="text" name="fijoreal" style="text-align:center" value="<?php echo $fila['fijoreal']?>"></td>
			<td align="center"><input type="text" name="celureal" style="text-align:center" value="<?php echo $fila['celureal']?>"></td>
			<td align="center"><input type="text" name="tel1" style="text-align:center" value="<?php echo $fila['tel1']?>"></td>
			<td align="center"><input type="text" name="tel2" style="text-align:center" value="<?php echo $fila['tel2']?>"></td>
			<td align="center"><input type="text" name="tel3" style="text-align:center" value="<?php echo $fila['tel3']?>"></td>
			<td align="center"><input type="text" name="tel4" style="text-align:center" value="<?php echo $fila['tel4']?>"></td>
			<td align="center"><input type="text" name="tel5" style="text-align:center" value="<?php echo $fila['tel5']?>"></td>
			<td align="center"><input type="text" name="tel6" style="text-align:center" value="<?php echo $fila['tel6']?>"></td>
			<td align="center"><input type="text" name="tel7" style="text-align:center" value="<?php echo $fila['tel7']?>"></td>
			<td align="center"><input type="text" name="tel8" style="text-align:center" value="<?php echo $fila['tel8']?>"></td>
			<td align="center"><input type="text" name="tel9" style="text-align:center" value="<?php echo $fila['tel9']?>"></td>
			<td align="center"><input type="text" name="tel10" style="text-align:center" value="<?php echo $fila['tel10']?>"></td>
			<td align="center"><input type="text" name="tel11" style="text-align:center" value="<?php echo $fila['tel11']?>"></td>
			<td align="center"><input type="text" name="tel12" style="text-align:center" value="<?php echo $fila['tel12']?>"></td>
			<td align="center"><input type="text" name="tel13" style="text-align:center" value="<?php echo $fila['tel13']?>"></td>
			<td align="center"><input type="text" name="tel14" style="text-align:center" value="<?php echo $fila['tel14']?>"></td>
			<td align="center"><input type="text" name="tel15" style="text-align:center" value="<?php echo $fila['tel15']?>"></td>
			<td align="center"><input type="text" name="tel16" style="text-align:center" value="<?php echo $fila['tel16']?>"></td>
			<td align="center"><input type="text" name="tel17" style="text-align:center" value="<?php echo $fila['tel17']?>"></td>
			<td align="center"><input type="text" name="tel18" style="text-align:center" value="<?php echo $fila['tel18']?>"></td>
			<td align="center"><input type="text" name="tel19" style="text-align:center" value="<?php echo $fila['tel19']?>"></td>
			<td align="center"><input type="text" name="tel20" style="text-align:center" value="<?php echo $fila['tel20']?>"></td>
			<td align="center"><input type="text" name="tel21" style="text-align:center" value="<?php echo $fila['tel21']?>"></td>
			<td align="center"><input type="text" name="tel22" style="text-align:center" value="<?php echo $fila['tel22']?>"></td>
			<td align="center">
			<select name="Tipificacion" class="selectencontrado">
            <option><?php echo $fila['tipificacion']?></option>
			<option>AGENDADO</option>
            <option>ENTREGADO</option>
            <option>ILOCALIZADO</option>
            <option>LLAMAR</option>
			<option>REAGENDAR</option>
			<option>FUERA DE LA CIUDAD</option>
			<option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			</select>
			</td>
			<td align="center"><input type="text" name="detalletipi" style="text-align:center" value="<?php echo $fila['detalletipi']?>"></td>
			<td align="center"><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td align="center"><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d h:i:s A");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td align="center"><input type="text" name="hora" style="text-align:center" value="<?php echo $fila['hora']?>"><br></td>
			<td align="center"><input type="text" name="asesor" style="text-align:center" value="<?php echo $fila['vendedor']?>"><br></td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input>
			<td align="center"><input type="submit" style="text-align:center" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
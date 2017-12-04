<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$idproducto = $_REQUEST['idproducto'];	
$sql = "select * from compradecartera WHERE idproducto='$idproducto'";
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

<style>
<!--
table tr:nth-child(even) {
	background-color: #eee;
}
 
table tr:nth-child(odd) {
	background-color: #fff;
}

table {
	width: 5000;
	font-size: 12px;
}
-->
</style>
   
</head>
   <body>
<br>

<form action="reportecompracartera.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

<center>
   <header>
       <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <b><p> EDICION DE REGISTROS </p></b>
   </header>
</center>
   
   <center style="color:blue"><strong>
			Esta Editando un Registro de: Compra de Cartera
			</strong></center>
        <br>
		
<form id="form1" name="form1" action="updateregistrocompraadmin.php" method="post">
<table align="center" cellspacing="5" cellpadding="5" border="3" border="1">   
			<tr align="center">
			<th>CEDULA</th>
            <th>NOMBRE</th>
            <th>TASA</th>
			<th>EXTRACUPO</th>
			<th>CUPO DISPONIBLE</th>
			<th>POTENCIAL TDC</th>
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
			<th>MOTIVO 1</th>
			<th>MOTIVO 2</th>
			<th>MOTIVO 3</th>
			<th>TIPIFICACION</th>
			<th>DETALLE TIPIFICACION</th>
			<th>VENDEDOR</th>
			<th>BANCO</th>
			<th>Tipo Tarjeta (F o P)</th>
			<th>Franquicia (F)</th>
			<th>Aliado (P)</th>
			<th>No de tarjeta Banco Emisor</th>
			<th>Valor Compra</th>
			<th>No de Cuotas</th>
			<th>Teléfono</th>
			<th>FECHA EDICION</th>
			<th>Actualizar</th>
			</tr>
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
            <td><input type="text" style="text-align:center" name="Cedula" value="<?php echo $fila['cedula']?>"></td>
            <td><input type="text" style="text-align:center" name="Nombre" value="<?php echo $fila['nombre']?>"></td>
			<td><input type="text" style="text-align:center" name="Tasa" value="<?php echo $fila['tasa']?>"></td>
			<td><input type="text" style="text-align:center" name="extracupo" value="<?php echo $fila['extracupo']?>"></td>
			<td><input type="text" name="cupodispo" style="text-align:center" value="<?php echo $fila['cupodispo']?>"></td>
			<td><input type="text" style="text-align:center" name="potencialtdc" value="<?php echo $fila['potencialtdc']?>"></td>
			<td><input type="text" name="tel1" style="text-align:center" value="<?php echo $fila['tel1']?>"></td>
			<td><input type="text" name="tel2" style="text-align:center" value="<?php echo $fila['tel2']?>"></td>
			<td><input type="text" name="tel3" style="text-align:center" value="<?php echo $fila['tel3']?>"></td>
			<td><input type="text" name="tel4" style="text-align:center" value="<?php echo $fila['tel4']?>"></td>
			<td><input type="text" name="tel5" style="text-align:center" value="<?php echo $fila['tel5']?>"></td>
			<td><input type="text" name="tel6" style="text-align:center" value="<?php echo $fila['tel6']?>"></td>
			<td><input type="text" name="tel7" style="text-align:center" value="<?php echo $fila['tel7']?>"></td>
			<td><input type="text" name="tel8" style="text-align:center" value="<?php echo $fila['tel8']?>"></td>
			<td><input type="text" name="tel9" style="text-align:center" value="<?php echo $fila['tel9']?>"></td>
			<td><input type="text" name="tel10" style="text-align:center" value="<?php echo $fila['tel10']?>"></td>
			<td><input type="text" name="tel11" style="text-align:center" value="<?php echo $fila['tel11']?>"></td>
			<td><input type="text" name="tel12" style="text-align:center" value="<?php echo $fila['tel12']?>"></td>
			<td><input type="text" name="tel13" style="text-align:center" value="<?php echo $fila['tel13']?>"></td>
			<td><input type="text" name="tel14" style="text-align:center" value="<?php echo $fila['tel14']?>"></td>
			<td><input type="text" name="tel15" style="text-align:center" value="<?php echo $fila['tel15']?>"></td>
			<td><input type="text" name="tel16" style="text-align:center" value="<?php echo $fila['tel16']?>"></td>
			<td><input type="text" name="tel17" style="text-align:center" value="<?php echo $fila['tel17']?>"></td>
			<td><input type="text" name="tel18" style="text-align:center" value="<?php echo $fila['tel18']?>"></td>
			<td><input type="text" name="tel19" style="text-align:center" value="<?php echo $fila['tel19']?>"></td>
			<td><input type="text" name="tel20" style="text-align:center" value="<?php echo $fila['tel20']?>"></td>
			<td><input type="text" name="tel21" style="text-align:center" value="<?php echo $fila['tel21']?>"></td>
			<td><input type="text" name="tel22" style="text-align:center" value="<?php echo $fila['tel22']?>"></td>
			<td width="400"><input type="text" name="motivo1" style="text-align:center" value="<?php echo $fila['motivo1']?>"></td>
			<td width="400"><input type="text" name="motivo2" style="text-align:center" value="<?php echo $fila['motivo2']?>"></td>
			<td width="400"><input type="text" name="motivo3" style="text-align:center" value="<?php echo $fila['motivo3']?>"></td>
			<td>
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
			<td><input type="text" name="detalletipi" style="text-align:center" value="<?php echo $fila['detalletipi']?>"></td>
			<td><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td><input type="text" name="banco" style="text-align:center" value="<?php echo $fila['banco']?>"></td>
			<td><input type="text" name="tipotarjetafop" style="text-align:center" value="<?php echo $fila['tipotarjetafop']?>"></td>
			<td><input type="text" name="franquiciaf" style="text-align:center" value="<?php echo $fila['franquiciaf']?>"></td>
			<td><input type="text" name="aliadop" style="text-align:center" value="<?php echo $fila['aliadop']?>"></td>
			<td><input type="text" name="notarbancoemisor" style="text-align:center" value="<?php echo $fila['notarbancoemisor']?>"></td>
			<td><input type="text" name="valorcompra" style="text-align:center" value="<?php echo $fila['valorcompra']?>"></td>
			<td><input type="text" name="nocuotas" style="text-align:center" value="<?php echo $fila['nocuotas']?>"></td>
			<td><input type="text" name="telefono" style="text-align:center" value="<?php echo $fila['telefono']?>"></td>
			<td><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d h:i:s A");
			echo $fecha;
			?>"readonly="readonly"></td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input>
			<td><input type="submit" style="text-align:center" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
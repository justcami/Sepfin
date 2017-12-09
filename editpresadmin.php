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
<script src="js2/enter.js"></script>
<link href="css2/sepfin.css" rel="stylesheet">  
</head>
  <body>
<form action="reporteprestamos.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

<center>
   <header>
       <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <b><p> EDICION REGISTROS PRESTAMOS PERSONALES</p></b>
   </header>
</center>
   		
<form id="form1" name="form1" action="updateregistropresadmin.php" method="post" onkeypress="return CanCelEnter()">
<center><table border="1" class="table3">
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{?>
<tr align="center"><td><b>Cedula</b><br><input type="text" name="Cedula" class="input1" value="<?php echo $fila['cedula']?>" onkeydown="cedu(this)"></td><td colspan="2">Nombre<br><input type="text" class="inputnom" name="Nombre" id="Nombre" value="<?php echo $fila['nombre']?>" onkeydown="nombre(this)"></td><td>Cupo 60 Meses<br><input type="text" class="input1" name="Cupo60" value="<?php echo $fila['cupo60']?>" onkeydown="tasa(this)"></td><td>Cupo 48 Meses<br><input type="text" class="input1" name="Cupo48" value="<?php echo $fila['cupo48']?>" onkeydown="extra(this)"></td><td>Tasa<br><input type="text" name="Tasa" class="input1" value="<?php echo $fila['tasa']?>" onkeydown="cupo(this)"></td><td>Cupo Aprobado<br><input type="text" class="input1" name="Cupoaprob" value="<?php echo $fila['cupoaprob']?>" onkeydown="poten(this)"></td><td>Plazo Aprobado<br><input type="text" name="plazoaprob" class="input1" value="<?php echo $fila['plazoaprob']?>" onkeydown="tela(this)"></td><td>Cuota<br><input type="text" name="cuota" class="input1" value="<?php echo $fila['cuota']?>" onkeydown="telb(this)"></td><td colspan="2">Direccion<br><input type="text" name="direccion" class="inputnom" value="<?php echo $fila['direccion']?>" onkeydown="telc(this)"></td></tr>
<tr align="center"><td>Barrio<br><input type="text" name="barrio" class="input1" value="<?php echo $fila['barrio']?>" onkeydown="teld(this)"></td><td>Localidad<br><input type="text" name="localidad" class="input1" value="<?php echo $fila['localidad']?>" onkeydown="tele(this)"></td><td>Fijo Real<br><input type="text" name="fijoreal" class="input1" value="<?php echo $fila['fijoreal']?>" onkeydown="telf(this)"></td><td>Celular Real<br><input type="text" class="input1" name="celureal" value="<?php echo $fila['celureal']?>" onkeydown="telg(this)"></td><td>Telefono 1<br><input type="text" class="input1" name="tel1" value="<?php echo $fila['tel1']?>" onkeydown="telh(this)"></td><td>Telefono 2<br><input type="text" class="input1" name="tel2" value="<?php echo $fila['tel2']?>" onkeydown="teli(this)"></td><td>Telefono 3<br><input type="text" name="tel3" class="input1" value="<?php echo $fila['tel3']?>" onkeydown="telj(this)"></td><td>Telefono 4<br><input type="text" class="input1" name="tel4" value="<?php echo $fila['tel4']?>" onkeydown="telk(this)"></td><td>Telefono 5<br><input type="text" name="tel5" class="input1" value="<?php echo $fila['tel5']?>" onkeydown="tell(this)"></td><td>Telefono 6<br><input type="text" name="tel6" class="input1" value="<?php echo $fila['tel6']?>" onkeydown="telm(this)"></td><td>Telefono 7<br><input type="text" name="tel7" class="input1" value="<?php echo $fila['tel7']?>" onkeydown="teln(this)"></td></tr>
<tr align="center"><td>Telefono 8<br><input type="text" name="tel8" class="input1" value="<?php echo $fila['tel8']?>" onkeydown="telo(this)"></td><td>Telefono 9<br><input type="text" name="tel9" class="input1" value="<?php echo $fila['tel19']?>" onkeydown="telp(this)"></td><td>Telefono 10<br><input type="text" name="tel10" class="input1" value="<?php echo $fila['tel10']?>" onkeydown="telq(this)"></td><td>Telefono 11<br><input type="text" class="input1" name="tel11" value="<?php echo $fila['tel11']?>" onkeydown="telr(this)"></td><td>Telefono 12<br><input type="text" class="input1" name="tel12" value="<?php echo $fila['tel12']?>" onkeydown="tels(this)"></td><td>Telefono 13<br><input type="text" class="input1" name="tel13" value="<?php echo $fila['tel13']?>" onkeydown="telt(this)"></td><td>Telefono 14<br><input type="text" name="tel14" class="input1" value="<?php echo $fila['tel14']?>" onkeydown="telu(this)"></td><td>Telefono 15<br><input type="text" class="input1" name="tel15" value="<?php echo $fila['tel15']?>" onkeydown="telv(this)"></td><td>Telefono 16<br><input type="text" class="input1" name="tel16" value="<?php echo $fila['tel16']?>"></td><td>Telefono 17<br><input type="text" class="input1" name="tel17" value="<?php echo $fila['tel17']?>"></td><td>Telefono 18<br><input type="text" class="input1" name="tel18" value="<?php echo $fila['tel18']?>"></td></tr>
<tr align="center"><td>Telefono 19<br><input type="text" class="input1" name="tel19" value="<?php echo $fila['tel19']?>"></td><td>Telefono 20<br><input type="text"  name="tel20" class="input1" onkeydown="motivoa(this)" value="<?php echo $fila['tel20']?>"></td><td>Telefono 21<br><input type="text" name="tel21" class="input1" value="<?php echo $fila['tel21']?>" onkeydown="motivob(this)"></td><td colspan="2">Telefono 22<br><input type="text" name="tel22" class="input3" value="<?php echo $fila['tel22']?>" onkeydown="motivoc(this)"></td><td colspan="2">Vendedor<br><input type="text" name="usuario" class="inputcentrado" value="<?php echo $fila['Usuario']?>" onkeydown="detalle(this)" readonly="readonly"></td><td colspan="2">Tipificacion<br><select name="Tipificacion" class="selectencontrado" onkeydown="tipi(this)">
            <option><?php echo $fila['tipificacion']?></option>
			<option>AGENDADO</option>
            <option>ENTREGADO</option>
            <option>ILOCALIZADO</option>
            <option>LLAMAR</option>
			<option>REAGENDAR</option>
			<option>FUERA DE LA CIUDAD</option>
			<option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			</select></td>
			<td colspan="2">Detalle Tipifi<br><input type="text" name="detalletipi" class="input3" value="<?php echo $fila['detalletipi']?>" onkeydown="detalle(this)"></td>
</tr>
<tr align="center" height="100"><td colspan="4">Motivo 1<br><textarea name="motivo1" class="input2" onkeydown="motivoa(this)"><?php echo $fila['motivo1']?></textarea></td><td colspan="3">Motivo 2<br><textarea name="motivo2" class="inputdir" onkeydown="motivob(this)"><?php echo $fila['motivo2']?></textarea></td><td colspan="4">Motivo 3<br><textarea name="motivo3" class="input2" onkeydown="motivoc(this)"><?php echo $fila['motivo3']?></textarea></td></tr>
<tr align="center">
			<td colspan="2">Fecha<br><input type="text" name="fecha" class="input7" value="<?php 
			$fecha= date("Y-m-d");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td colspan="2">Asesor<br><input type="text" name="asesor" class="input6" value="<?php echo $fila['vendedor']?>"></td>
			<td colspan="7">Hora<br><textarea name="hora" class="input5" onkeypress="return ActiVarEnter()"><?php echo $fila['hora']?></textarea></td>
</tr>
<tr align="center">
<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input><td colspan="12">
<b><input type="submit" style="text-align:center" name="actualizar" value="Actualizar" align="right" onkeypress="return ActiVarEnter()"></b></td></tr>
<?php } ?>
</table></center>
</form>
</body>
</html>
<?php include("templates/footer.php"); ?>
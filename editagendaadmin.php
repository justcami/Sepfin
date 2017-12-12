<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$idagendamiento = $_REQUEST['idagendamiento'];
$sql = "select * from agendamientos WHERE idagendamiento='$idagendamiento'";
	
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="css2/estiloeditar.css" type="text/css" rel="stylesheet" media="">
<style type="text/css">
<!--

-->
</style>
<title>Edicion de Agendamientos</title>
</head>
<body>

<body>
<div id="agendamientomovil">
<a href="reporteagendamientos.php" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<div id="iconocu" class="usu">
<img src="img/regresar.png" width="29" height="29" alt=""/>
</div>
</a>
<div id="iconodu" class="usu">Regresar
</div>
<div class="bienve" id="repagenda">
			<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
</div>
</div>
<header id="agendamientos">
<div id="logoagendamientos">
	<img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
</header>
<div id="filtroagenomovil">
<nav id="agendamientos">
	<ul>
		<li class="baner" id="recorda">Editar Agendamiento</li>
	</ul>	
</nav>

<form id="form1" name="form1" action="updateagendamientoadmin.php" method="post" onkeypress="return CanCelEnter()">
<center>
<table border="1" class="table4">
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{?>
<tr align="center">
<td><b>Cedula</b><br><input type="text" class="input1" name="Cedula" value="<?php echo $fila['cedula']?>" onkeydown="cedula(this)"></td>
<td><b>Codigo</b><br><input type="text" class="input1" name="codigo" value="<?php echo $fila['codigo']?>" onkeydown="cedula(this)"></td>
<td><b>Codigo Sobre</b><br><input type="text" class="input1" name="codigosobre" value="<?php echo $fila['codigosobre']?>" onkeydown="cedula(this)"></td>
<td colspan="2">Nombre<br><input type="text" class="input3" name="nombre" id="Nombre" value="<?php echo $fila['nombre']?>" onkeydown="nombre(this)"></td>
<td colspan="3">Estado<br><input type="text" class="input8" name="estado" value="<?php echo $fila['estado']?>" onkeydown="tasa(this)"></td>
<td colspan="3">Direccion<br><input type="text" name="direccion" class="input8" value="<?php echo $fila['direccion']?>" onkeydown="tele(this)"></td>
</tr>

<tr align="center">
<td colspan="2">Barrio<br><input type="text" name="barrio" class="input3" value="<?php echo $fila['barrio']?>" onkeydown="telf(this)"></td>
<td>Localidad<br><input type="text" class="input1" name="localidad" value="<?php echo $fila['localidad']?>" onkeydown="telg(this)"></td>
<td>Observaciones<br><input type="text" class="input1" name="observaciones" value="<?php echo $fila['observaciones']?>" onkeydown="telg(this)"></td>
<td>Telefono 1<br><input type="text" class="input1" name="tel1" value="<?php echo $fila['tel1']?>" onkeydown="extra(this)"></td>
<td>Telefono 2<br><input type="text" class="input1" name="tel2" value="<?php echo $fila['tel2']?>" onkeydown="cupo(this)"></td>
<td>Telefono 3<br><input type="text" class="input1" name="tel3" value="<?php echo $fila['tel3']?>" onkeydown="poten(this)"></td>
</tr>

<tr align="center">
<td colspan="3">Motivo 1<br><textarea name="motivo1" class="input2" onkeydown="motivoa(this)"><?php echo $fila['motivo1']?></textarea></td>
<td colspan="3">Motivo 2<br><textarea name="motivo2" class="input2" onkeydown="motivob(this)"><?php echo $fila['motivo2']?></textarea></td>
<td colspan="3">Motivo 3<br><textarea name="motivo3" class="input2" onkeydown="motivoc(this)"><?php echo $fila['motivo3']?></textarea></td>
</tr>

<tr align="center" height="100">
<td colspan="3">Motivo 4<br><textarea name="motivo4" class="input2" onkeydown="motivoa(this)"><?php echo $fila['motivo4']?></textarea></td>
<td colspan="3">Motivo 5<br><textarea name="motivo5" class="input2" onkeydown="motivob(this)"><?php echo $fila['motivo5']?></textarea></td>
</tr>

<tr align="center">
<td>Vendedor<br><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td>Tipificacion<select name="Tipificacion" class="selectencontrado" onkeydown="tipi(this)">
            <option><?php echo $fila['tipificacion']?></option>
			<option>AGENDADO</option>
            <option>ENTREGADO</option>
            <option>ILOCALIZADO</option>
            <option>LLAMAR</option>
			<option>REAGENDAR</option>
			<option>VENTA</option>
			<option>FUERA DE LA CIUDAD</option>
			<option>SIN CEDULA</option>
			<option>SIN RECIBO</option>			
			<option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			</select></td>
			<td colspan="2">Detalle Tipifi<br><input type="text" name="detalletipi" class="input3" value="<?php echo $fila['detalletipi']?>" onkeydown="detalle(this)"></td>
			<td>Fecha Edicion<br><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td colspan="3">Hora<br><input type="text" name="hora" class="input8" value="<?php echo $fila['hora']?>" onkeydown="ban(this)"></td>
			<td colspan="3">Asesor<br><input type="text" name="asesor" class="input8" value="<?php echo $fila['asesor']?>" onkeydown="ban(this)"></td>
			<td colspan="3">Base<br><input type="text" name="base" class="input8" value="<?php echo $fila['base']?>" onkeydown="ban(this)"></td>
</tr>

<tr align="center">
<input type="hidden" name="AgendamientoID" value="<?php echo $fila['idagendamiento']?>"></input>
<td colspan="9"><input type="submit" style="text-align:center" name="actualizar" value="Actualizar" align="right" onkeypress="return ActiVarEnter()"></td>
</tr>
<?php } ?>
</table>
</center>
</form>		
</body>
</html>
<?php include("templates/footer.php"); ?>
<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);
$idproducto = $_REQUEST['idproducto'];	
$sql = "select * from compradecartera WHERE idproducto='$idproducto'";
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
<title>Edicion de Compra de Cartera</title>
</head>
<body>

<body>
<div id="agendamientomovil">
<a href="reportecompracartera.php" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
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
		<li class="baner" id="recorda">Editar Registro Compra de Cartera</li>
	</ul>	
</nav>

<form id="form1" name="form1" action="updateregistrocompraadmin.php" method="post" onkeypress="return CanCelEnter()">

<center><table border="1" class="table3">
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{			
         ?>
<tr align="center"><td><b>Cedula</b><br><input type="text" name="Cedula" class="input1" value="<?php echo $fila['cedula']?>" onkeydown="cedula(this)"></td><td colspan="2">Nombre<br><input type="text" class="input3" name="Nombre" id="Nombre" value="<?php echo $fila['nombre']?>" onkeydown="nombre(this)"></td><td>Tasa<br><input type="text" class="input1" name="Tasa" value="<?php echo $fila['tasa']?>" onkeydown="tasa(this)"></td><td>ExtraCupo<br><input type="text" class="input1" name="extracupo" value="<?php echo $fila['extracupo']?>" onkeydown="extra(this)"></td><td>Cupo Disponible<br><input type="text" name="cupodispo" class="input1" value="<?php echo $fila['cupodispo']?>" onkeydown="cupo(this)"></td><td>Potencial TDC<br><input type="text" class="input1" name="potencialtdc" value="<?php echo $fila['potencialtdc']?>" onkeydown="poten(this)"></td><td>Telefono 1<br><input type="text" name="tel1" class="input1" value="<?php echo $fila['tel1']?>" onkeydown="tela(this)"></td><td>Telefono 2<br><input type="text" name="tel2" class="input1" value="<?php echo $fila['tel2']?>" onkeydown="telb(this)"></td><td>Telefono 3<br><input type="text" name="tel3" class="input1" value="<?php echo $fila['tel3']?>" onkeydown="telc(this)"></td><td>Telefono 4<br><input type="text" name="tel4" class="input1" value="<?php echo $fila['tel4']?>" onkeydown="teld(this)"></td></tr>
<tr align="center"><td>Telefono 5<br><input type="text" name="tel5" class="input1" value="<?php echo $fila['tel5']?>" onkeydown="tele(this)"></td><td>Telefono 6<br><input type="text" name="tel6" class="input1" value="<?php echo $fila['tel6']?>" onkeydown="telf(this)"></td><td>Telefono 7<br><input type="text" class="input1" name="tel7" value="<?php echo $fila['tel7']?>" onkeydown="telg(this)"></td><td>Telefono 8<br><input type="text" class="input1" name="tel8" value="<?php echo $fila['tel8']?>" onkeydown="telh(this)"></td><td>Telefono 9<br><input type="text" class="input1" name="tel9" value="<?php echo $fila['tel9']?>" onkeydown="teli(this)"></td><td>Telefono 10<br><input type="text" name="tel10" class="input1" value="<?php echo $fila['tel10']?>" onkeydown="telj(this)"></td><td>Telefono 11<br><input type="text" class="input1" name="tel11" value="<?php echo $fila['tel11']?>" onkeydown="telk(this)"></td><td>Telefono 12<br><input type="text" name="tel12" class="input1" value="<?php echo $fila['tel12']?>" onkeydown="tell(this)"></td><td>Telefono 13<br><input type="text" name="tel13" class="input1" value="<?php echo $fila['tel13']?>" onkeydown="telm(this)"></td><td>Telefono 14<br><input type="text" name="tel14" class="input1" value="<?php echo $fila['tel14']?>" onkeydown="teln(this)"></td><td>Telefono 15<br><input type="text" name="tel15" class="input1" value="<?php echo $fila['tel15']?>" onkeydown="telo(this)"></td></tr>
<tr align="center"><td>Telefono 16<br><input type="text" name="tel16" class="input1" value="<?php echo $fila['tel16']?>" onkeydown="telp(this)"></td><td>Telefono 17<br><input type="text" name="tel17" class="input1" value="<?php echo $fila['tel17']?>" onkeydown="telq(this)"></td><td>Telefono 18<br><input type="text" class="input1" name="tel18" value="<?php echo $fila['tel18']?>" onkeydown="telr(this)"></td><td>Telefono 19<br><input type="text" class="input1" name="tel19" value="<?php echo $fila['tel19']?>" onkeydown="tels(this)"></td><td>Telefono 20<br><input type="text" class="input1" name="tel20" value="<?php echo $fila['tel20']?>" onkeydown="telt(this)"></td><td>Telefono 21<br><input type="text" name="tel21" class="input1" value="<?php echo $fila['tel21']?>" onkeydown="telu(this)"></td><td>Telefono 22<br><input type="text" class="input1" name="tel22" value="<?php echo $fila['tel22']?>" onkeydown="telv(this)"></td><td>Vendedor<br><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td><td>Tipificacion<select name="Tipificacion" class="selectencontrado" onkeydown="tipi(this)">
            <option><?php echo $fila['tipificacion']?></option>
			<option>ILOCALIZADO</option>
            <option>LLAMAR</option>
            <option>FUERA DE LA CIUDAD</option>
            <option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			<option>VENTA</option>
			</select></td>
			<td colspan="2">Detalle Tipifi<br><input type="text" name="detalletipi" class="input3" value="<?php echo $fila['detalletipi']?>" onkeydown="detalle(this)"></td></tr>
<tr align="center" height="100"><td colspan="4">Motivo 1<br><textarea name="motivo1" class="input2" onkeydown="motivoa(this)"><?php echo $fila['motivo1']?></textarea></td><td colspan="3">Motivo 2<br><textarea name="motivo2" class="input9" onkeydown="motivob(this)"><?php echo $fila['motivo2']?></textarea></td><td colspan="4">Motivo 3<br><textarea name="motivo3" class="input2" onkeydown="motivoc(this)"><?php echo $fila['motivo3']?></textarea></td></tr>
<tr align="center"><td>Banco<br><input type="text" name="banco" class="input1" value="<?php echo $fila['banco']?>" onkeydown="ban(this)"></td><td colspan="2">Tipo Tarjeta (FoP)<br><input type="text" name="tipotarjetafop" class="input3" value="<?php echo $fila['tipotarjetafop']?>" onkeydown="tipotar(this)"></td><td>Franquicia (F)<br><input type="text" class="input1" name="franquiciaf" value="<?php echo $fila['franquiciaf']?>" onkeydown="franqui(this)"></td><td>Aliado (P)<br><input type="text" class="input1" name="aliadop" value="<?php echo $fila['aliadop']?>" onkeydown="aliado(this)"></td><td colspan="2">No Tarj Ban Emisor<br><input type="text" class="input3" name="notarbancoemisor" value="<?php echo $fila['notarbancoemisor']?>" onkeydown="notar(this)"></td><td>Valor Compra<br><input type="text" name="valorcompra" class="input1" value="<?php echo $fila['valorcompra']?>" onkeydown="valor(this)"></td><td>No de Cuotas<br><input type="text" class="input1" name="nocuotas" value="<?php echo $fila['nocuotas']?>" onkeydown="nocuo(this)"></td><td>Telefono<br><input type="text" name="telefono" class="input1" value="<?php echo $fila['telefono']?>" onkeypress="return ActiVarEnter()"></td>
			<td>Fecha<br><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d");
			echo $fecha;
			?>"readonly="readonly"></td></tr>
<tr align="center">
<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input><td colspan="11">
<b><input type="submit" style="text-align:center" name="actualizar" value="Actualizar" align="right" onkeypress="return ActiVarEnter()"></b></td></tr>
<?php } ?>
</table></center>
</form>
</body>
</html>
<?php include("templates/footer.php"); ?>
<?php 
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');
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
					
		//Con esta consulta traigo los campos de la tabla productos asociada a ese ID, para ver si esta en VENTA y que usuario la vendio.
		$sql2 = "select * from $newphrase WHERE idproducto='$idproducto'";
		$result2 = $con->query($sql2);
		if(!$result2)
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result2->fetch_assoc())
		{		
					$tipifi = $fila['tipificacion'];
					$usuariotipi = $fila['Usuario'];
					#etc.
					$venta="VENTA";
					
	if((($tipifi==$venta) && ($usuariotipi==$nuusuario)) || ($tipifi!=$venta))
	{
	
	if($rowestadoregistro=="Ocupado"){
	echo "<script>
        alert('El Registro esta en uso por otro Usuario');
        location.href='gestion.php';
        </script>";
	}else{	
	$sql = "select * from $newphrase WHERE idproducto='$idproducto'";
	$Ocupado="Ocupado";
	$up = $con -> query ("UPDATE $newphrase SET EstadoRegistro='$Ocupado' WHERE idproducto='$idproducto'");
	}
	}else if(($tipifi==$venta) && ($usuariotipi!=$nuusuario)){
	echo "<script>
        alert('El Registro esta agendado por otro Usuario, usted no lo puede modificar');
        location.href='gestion.php';
        </script>";	
		}
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="../css2/estiloeditaruser.css" type="text/css" rel="stylesheet" media="">
<title>Edicion de Venta de Tarjetas de Credito</title>
</head>
<body>

<body>
<div id="agendamientomovil">
<a href="../dejarregistrolibre.php?productor=<?php echo $rowproducto?>&idproductor=<?php echo $idproducto?>" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<div id="iconocu" class="usu">
<img src="../img/regresar.png" width="29" height="29" alt=""/>
</div>
</a>
<div id="iconodu" class="usu">Regresar Sin Realizar Cambios
</div>
<div class="bienve" id="repagenda">
			<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
</div>
</div>
			<?php }}}}}  ?>
<header id="agendamientos">
<div id="logoagendamientos">
	<img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
</header>
<nav id="agendamientos">
	<ul>
		<li class="baner" id="recorda">Editar Registro Venta de Tarjetas de Credito</li>
	</ul>	
</nav>
<form id="form1" name="form1" action="updateregistroprod.php" method="post">
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
<td><b>Cedula</b><br><input type="text" class="inputnomod" name="Cedula" value="<?php echo $fila['cedula']?>" readonly="readonly" onkeydown="cedula(this)"></td>
<td colspan="2">Nombre<br><input type="text" class="inputnomu" name="Nombre" id="Nombre" value="<?php echo $fila['nombre']?>" readonly="readonly" onkeydown="nombre(this)"></td>
<td colspan="3">Estado<br><input type="text" class="input8" name="estado" value="<?php echo $fila['estado']?>" onkeydown="tasa(this)"></td>
<td>Telefono 1<br><input type="text" class="input1" name="tel1" value="<?php echo $fila['tel1']?>" onkeydown="extra(this)"></td>
<td>Telefono 2<br><input type="text" class="input1" name="tel2" value="<?php echo $fila['tel2']?>" onkeydown="cupo(this)"></td>
<td>Telefono 3<br><input type="text" class="input1" name="tel3" value="<?php echo $fila['tel3']?>" onkeydown="poten(this)"></td>
</tr>

<tr align="center">
<td>Telefono 4<br><input type="text" name="tel4" class="input1" value="<?php echo $fila['tel4']?>" onkeydown="tela(this)"></td>
<td>Telefono 5<br><input type="text" name="tel5" class="input1" value="<?php echo $fila['tel5']?>" onkeydown="telb(this)"></td>
<td>Telefono 6<br><input type="text" name="tel6" class="input1" value="<?php echo $fila['tel6']?>" onkeydown="telc(this)"></td>
<td>Telefono 7<br><input type="text" name="tel7" class="input3" value="<?php echo $fila['tel7']?>" onkeydown="teld(this)"></td>
<td colspan="3">Direccion<br><input type="text" name="direccion" class="input8" value="<?php echo $fila['direccion']?>" onkeydown="tele(this)"></td>
<td colspan="2">Barrio<br><input type="text" name="barrio" class="input3" value="<?php echo $fila['barrio']?>" onkeydown="telf(this)"></td>
</tr>

<tr align="center" height="100">
<td colspan="3">Motivo 1<br><textarea name="motivo1" class="input2" onkeydown="motivoa(this)"><?php echo $fila['motivo1']?></textarea></td>
<td colspan="3">Motivo 2<br><textarea name="motivo2" class="input2" onkeydown="motivob(this)"><?php echo $fila['motivo2']?></textarea></td>
<td colspan="3">Motivo 3<br><textarea name="motivo3" class="input2" onkeydown="motivoc(this)"><?php echo $fila['motivo3']?></textarea></td>
</tr>

<tr align="center">
<td>Localidad<br><input type="text" class="input1" name="localidad" value="<?php echo $fila['localidad']?>" onkeydown="telg(this)"></td>
<td>Vendedor<br><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td>Tipificacion<select name="Tipificacion" class="selectencontrado" onkeydown="tipi(this)">
            <option><?php echo $fila['tipificacion']?></option>
			<option>ILOCALIZADO</option>
            <option>LLAMAR</option>
            <option>NO LE INTERESA</option>
            <option>NO APLICA</option>
			<option>VENTA</option>
			</select></td>
			<td colspan="2">Detalle Tipifi<br><input type="text" name="detalletipi" class="input3" value="<?php echo $fila['detalletipi']?>" onkeydown="detalle(this)"></td>
			<td>Fecha Edicion<br><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td colspan="3">Base<br><input type="text" name="base" class="input8" value="<?php echo $fila['base']?>" onkeydown="ban(this)"></td>
</tr>

<tr align="center">
<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input>
<td colspan="9"><input type="submit" style="text-align:center" name="actualizar" value="Actualizar" align="right" onkeypress="return ActiVarEnter()"></td>
</tr>
<?php } ?>
</table>
</center>
</form>		
</body>
</html>
<?php include("templates/footer.php"); ?>
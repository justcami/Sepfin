<?php 
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');
//error_reporting (0);

//Traigo la cedula de la tabla ventatarjetas con el idproducto
$idproducto = $_REQUEST['idproducto'];

$busproda = $con -> query ("SELECT * FROM ventadetarjetas WHERE idproducto='$idproducto'");
			$row_cnt = $busproda->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($row = $busproda->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$cedula = $row['cedula'];
					$nombre = $row['nombre'];
					$estado = $row['estado'];
					$direccion = $row['direccion'];
					$barrio = $row['barrio'];
					$localidad = $row['localidad'];
					$tel1 = $row['tel1'];
					$tel2 = $row['tel2'];
					$tel3 = $row['tel3'];
					$fecha = date("Y-m-d h:i:s A");
					$base = $row['base'];
					$Libre="";
					$phrase = "Venta de Tarjetas";
					#etc.	

//Con la cedula busco el idagendamiento de la tabla agendamientos
$busprodins = $con -> query ("SELECT idagendamiento FROM agendamientos WHERE cedula='$cedula'");
			$row_cnt3 = $busprodins->num_rows;			
			if ($row_cnt3 < 1)
			{
				$up2 = $con -> query ("INSERT INTO agendamientos (idagendamiento, cedula, nombre, estado, direccion, barrio, localidad, tel1, tel2, tel3, fecha, base, EstadoRegistro, Usuario, producto) VALUES ('','$cedula','$nombre','$estado','$direccion','$barrio','$localidad','$tel1','$tel2','$tel3','$fecha','$base','$Libre','$nuusuario','$phrase')");
			}
//Si no encuentra el if simplemente sigue leyendo el condigo, quiere decir que si encontro datos
$busprodb = $con -> query ("SELECT idagendamiento FROM agendamientos WHERE cedula='$cedula'");
			$row_cnt = $busprodb->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowidagenda = $busprodb->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowidagenda = $rowidagenda['idagendamiento'];
					#etc.	

$idagendamiento = $rowidagenda;
					
$estadoregistro = $con -> query ("SELECT EstadoRegistro FROM agendamientos WHERE idagendamiento='$idagendamiento'");
			$row_cnt2 = $estadoregistro->num_rows;
			if ($row_cnt2 > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowestadoregistro = $estadoregistro->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowestadoregistro = $rowestadoregistro['EstadoRegistro'];
					#etc.
		
		//Con esta consulta traigo los campos de la tabla productos asociada a ese ID, para ver si esta en VENTA y que usuario la vendio.
		$sql2 = "select * from agendamientos WHERE idagendamiento='$idagendamiento'";
		$result2 = $con->query($sql2);
		if(!$result2)
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result2->fetch_assoc())
		{		
					$usuariotipi = $fila['Usuario'];
					#etc.
					
	if($usuariotipi==$nuusuario){				
	
	if($rowestadoregistro=="Ocupado"){
	echo "<script>
        alert('El Registro esta en uso por otro Usuario');
        location.href='agendamientos.php';
        </script>";
			}else{	
	$sql = "select * from agendamientos WHERE idagendamiento='$idagendamiento'";
	$Ocupado="Ocupado";
	$up = $con -> query ("UPDATE agendamientos SET EstadoRegistro='$Ocupado' WHERE idagendamiento='$idagendamiento'");
	} 
	}else if($usuariotipi!=$nuusuario){
	echo "<script>
        alert('El Registro esta agendado por otro Usuario, usted no lo puede modificar');
        location.href='agendamientos.php';
        </script>";	
			}}}}}}}}
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="../css2/estiloeditar.css" type="text/css" rel="stylesheet" media="">

<title>Edicion de Agendamientos</title>
</head>
<body>

<body>
<div id="agendamientomovil">
<a href="../dejaragendamientolibre.php?idagendamientor=<?php echo $idagendamiento?>" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<div id="iconocu" class="usu">
<img src="../img/regresar.png" width="29" height="29" alt=""/>
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
	<img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
</header>
<div id="filtroagenomovil">
<nav id="agendamientos">
	<ul>
		<li class="baner" id="recorda">Editar Agendamiento</li>
	</ul>	
</nav>

<form id="form1" name="form1" action="updateagendamiento.php" method="post" onkeypress="return CanCelEnter()">
<center>
<table border="1" class="table3">
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ');
		}
		while ($fila = $result->fetch_assoc())
		{?>
<tr align="center">
<td><b>Cedula</b><br><input type="text" class="inputnomod" name="Cedula" value="<?php echo $fila['cedula']?>" onkeydown="cedula(this)" readonly></td>
<td><b>Codigo</b><br><input type="text" class="inputnomod" name="codigo" value="<?php echo $fila['codigo']?>" onkeydown="cedula(this)" readonly></td>
<td><b>Codigo Sobre</b><br><input type="text" class="inputnomod" name="codigosobre" value="<?php echo $fila['codigosobre']?>" onkeydown="cedula(this)" readonly></td>
<td colspan="2">Nombre<br><input type="text" class="inputnomu" name="nombre" id="Nombre" value="<?php echo $fila['nombre']?>" onkeydown="nombre(this)" readonly></td>
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
			<td>Tipificacion<select name="Tipificacion" class="selectencontrado" onkeydown="tipi(this)" required>
            <option><?php echo $fila['tipitificacion']?></option>
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
<?php include("../templates/footer.php"); ?>
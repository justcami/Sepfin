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
					
	if((($tipifi==$venta) && ($usuariotipi==$nuusuario)) || ($tipifi!=$venta)){
	
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
		}}}}
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
	width: 3000;
	font-size: 12px;
}
-->
</style>
   
</head>
   <body>
<br>

<form action="/Sepfin/dejarregistrolibre.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<input type="hidden" name="productor" method="post" value="<?php echo $rowproducto?>">
<input type="hidden" name="idproductor" method="post" value="<?php echo $idproducto?>">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

<center>
   <header>
   <?php }}  ?>
       <img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <b><p> EDICION DE REGISTROS </p></b>
   </header>
</center>
   
   <center style="color:blue"><strong>
			Esta editando un registro de: <?php
			
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
			</strong></center>
        <br>
		
       <form id="form1" name="form1" action="updateregistroprod.php" method="post">


<table align="center" cellspacing="5" cellpadding="5" border="3" border="1">   
			<tr align="center">
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
            <td><input type="text" class="inputcentrado" name="Cedula" value="<?php echo $fila['cedula']?>" readonly="readonly"</td>
            <td><input type="text" class="inputcentrado" name="Nombre" value="<?php echo $fila['nombre']?>" readonly="readonly"</td>
			<td><input type="text" name="estado" style="text-align:center" value="<?php echo $fila['estado']?>"></td>
			<td><input type="text" name="tel1" style="text-align:center" value="<?php echo $fila['tel1']?>"></td>
			<td><input type="text" name="tel2" style="text-align:center" value="<?php echo $fila['tel2']?>"></td>
			<td><input type="text" name="tel3" style="text-align:center" value="<?php echo $fila['tel3']?>"></td>
			<td><input type="text" name="tel4" style="text-align:center" value="<?php echo $fila['tel4']?>"></td>
			<td><input type="text" name="tel5" style="text-align:center" value="<?php echo $fila['tel5']?>"></td>
			<td><input type="text" name="tel6" style="text-align:center" value="<?php echo $fila['tel6']?>"></td>
			<td><input type="text" name="tel7" style="text-align:center" value="<?php echo $fila['tel7']?>"></td>
			<td><input type="text" name="direccion" style="text-align:center" value="<?php echo $fila['direccion']?>"></td>
			<td><input type="text" name="barrio" style="text-align:center" value="<?php echo $fila['barrio']?>"></td>
			<td><input type="text" name="localidad" style="text-align:center" value="<?php echo $fila['localidad']?>"></td>
			<td><input type="text" name="motivo1" style="text-align:center" value="<?php echo $fila['motivo1']?>"></td>
			<td><input type="text" name="motivo2" style="text-align:center" value="<?php echo $fila['motivo2']?>"></td>
			<td><input type="text" name="motivo3" style="text-align:center" value="<?php echo $fila['motivo3']?>"></td>
			<td>
			<select name="Tipificacion" class="selectencontrado" required>
            <option><?php echo $fila['tipificacion']?></option>
            <option>ILOCALIZADO</option>
            <option>LLAMAR</option>
			<option>NO LE INTERESA</option>
			<option>NO APLICA</option>
			<option>VENTA</option>
			</select>
			</td>
			<td><input type="text" name="detalletipi" style="text-align:center" value="<?php echo $fila['detalletipi']?>"></td>
			<td><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d h:i:s A");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td><input type="text" name="base" style="text-align:center"></td>
			<input type="hidden" name="ProductoID" value="<?php echo $fila['idproducto']?>"></input>
			<td><input type="submit" style="text-align:center" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
<?php 
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');
error_reporting (0);

$idagendamiento = $_REQUEST['idagendamiento'];
					
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
		}}}}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Edicion de Agendamientos</title>
		
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

<form action="/Sepfin/dejaragendamientolibre.php" method="POST" onsubmit="return confirm('Esta Seguro de que no quiere realizar cambios?');">
<input type="hidden" name="idagendamientor" method="post" value="<?php echo $idagendamiento?>">
<button type="submit">Regresar Sin Realizar Cambios</button>
</form>

<center>
   <header>
       <img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <b><p> EDICION DE REGISTROS </p></b>
   </header>
</center>
   
   <center style="color:blue">
   <strong>Esta editando un Agendamiento</strong>
   </center><br>
		       
<form id="form1" name="form1" action="updateagendamiento.php" method="post">
<table align="center" cellspacing="5" cellpadding="5" border="3" border="1">   
			<tr align="center">
			<th>CEDULA</th>
            <th>CODIGO</th>
			<th>CODIGO SOBRE</th>
			<th>NOMBRE</th>
			<th>ESTADO</th>
			<th>DIRECCION</th>
			<th>BARRIO</th>
			<th>LOCALIDAD</th>
			<th>OBSERVACIONES</th>
			<th>TELEFONO 1</th>
			<th>TELEFONO 2</th>
			<th>TELEFONO 3</th>
			<th>MOTIVO 1</th>
			<th>MOTIVO 2</th>
			<th>MOTIVO 3</th>
			<th>MOTIVO 4</th>
			<th>MOTIVO 5</th>
			<th>TIPIFICACION</th>
			<th>DETALLE TIPIFICACION</th>
			<th>VENDEDOR</th>
			<th>FECHA</th>
			<th>HORA</th>
			<th>ASESOR</th>
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
            <td><input type="text" class="inputcentrado" name="Cedula" value="<?php echo $fila['cedula']?>" readonly="readonly"></td>
            <td><input type="text" class="inputcentrado" name="codigo" value="<?php echo $fila['codigo']?>" readonly="readonly"></td>
			<td><input type="text" class="inputcentrado" name="codigosobre" value="<?php echo $fila['codigosobre']?>" readonly="readonly"></td>
			<td><input type="text" class="inputcentrado" name="nombre" value="<?php echo $fila['nombre']?>" readonly="readonly"></td>
			<td><input type="text" name="estado" style="text-align:center" value="<?php echo $fila['estado']?>"></td>
			<td><input type="text" name="direccion" style="text-align:center" value="<?php echo $fila['direccion']?>"></td>
			<td><input type="text" name="barrio" style="text-align:center" value="<?php echo $fila['barrio']?>"></td>
			<td><input type="text" name="localidad" style="text-align:center" value="<?php echo $fila['localidad']?>"></td>
			<td><input type="text" name="observaciones" style="text-align:center" value="<?php echo $fila['observaciones']?>"></td>
			<td><input type="text" name="tel1" style="text-align:center" value="<?php echo $fila['tel1']?>"></td>
			<td><input type="text" name="tel2" style="text-align:center" value="<?php echo $fila['tel2']?>"></td>
			<td><input type="text" name="tel3" style="text-align:center" value="<?php echo $fila['tel3']?>"></td>
			<td><input type="text" name="motivo1" style="text-align:center" value="<?php echo $fila['motivo1']?>"></td>
			<td><input type="text" name="motivo2" style="text-align:center" value="<?php echo $fila['motivo2']?>"></td>
			<td><input type="text" name="motivo3" style="text-align:center" value="<?php echo $fila['motivo3']?>"></td>
			<td><input type="text" name="motivo4" style="text-align:center" value="<?php echo $fila['motivo4']?>"></td>
			<td><input type="text" name="motivo5" style="text-align:center" value="<?php echo $fila['motivo5']?>"></td>
			<td>
			<select name="Tipificacion" class="selectencontrado" required>
            <option><?php echo $fila['tipitificacion']?></option>
            <option>AGENDADO</option>
            <option>ENTREGADO</option>
			<option>ILOCALIZADO</option>
			<option>REAGENDAR</option>
			<option>VENTA</option>
			<option>FUERA DE LA CIUDAD</option>
			<option>SIN CEDULA</option>
			<option>SIN RECIBO</option>
			<option>NO LE INTERESA</option>
			</select>
			</td>
			<td><input type="text" name="detalletipi" style="text-align:center" value="<?php echo $fila['detalletipi']?>"></td>
			<td><input type="text" class="inputcentrado" name="usuario" value="<?php echo $fila['Usuario']?>" readonly="readonly"></td>
			<td><input type="text" name="fecha" class="inputcentrado" value="<?php 
			$fecha= date("Y-m-d h:i:s A");
			echo $fecha;
			?>"readonly="readonly"></td>
			<td><input type="text" name="hora" style="text-align:center" value="<?php echo $fila['hora']?>"></td>
			<td><input type="text" name="asesor" style="text-align:center" value="<?php echo $fila['asesor']?>"></td>
			<td><input type="text" name="base" style="text-align:center" value="<?php echo $fila['base']?>"></td>
			<input type="hidden" name="AgendamientoID" value="<?php echo $fila['idagendamiento']?>"></input>
			<td><input type="submit" style="text-align:center" value="Actualizar" align="right"></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
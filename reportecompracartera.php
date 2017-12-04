<?php
include("seguridad.php");
include ('conexion.php');
error_reporting (0);
?>
<?php 
$Producto = $_REQUEST['Producto'];
$busqueda=$_POST['filtro'];
if($busqueda==""){
	
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from compradecartera";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from compradecartera WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR tasa LIKE '%".$busqueda."%' OR extracupo LIKE '%".$busqueda."%' OR cupodispo LIKE '%".$busqueda."%' OR potencialtdc LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR tel8 LIKE '%".$busqueda."%' OR tel9 LIKE '%".$busqueda."%' OR tel10 LIKE '%".$busqueda."%' OR tel11 LIKE '%".$busqueda."%' OR tel12 LIKE '%".$busqueda."%' OR tel13 LIKE '%".$busqueda."%' OR tel14 LIKE '%".$busqueda."%' OR tel15 LIKE '%".$busqueda."%' OR tel16 LIKE '%".$busqueda."%' OR tel17 LIKE '%".$busqueda."%' OR tel18 LIKE '%".$busqueda."%' OR tel19 LIKE '%".$busqueda."%' OR tel20 LIKE '%".$busqueda."%' OR tel21 LIKE '%".$busqueda."%' OR tel22 LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%')";
				break;					
				}
	}else{
		$sql = "select * from compradecartera.;";
			}}
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="productos.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
<!--
.inputcentrado {
	text-align: center;
	background-color:LAVENDER;
   }
   
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
<title>REPORTES DE COMPRA DE CARTERA</title>
<script language="JavaScript">
function aviso(url){
if (!confirm("ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script> 
   </head>
   <body>         
<center>
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">REPORTES DE COMPRA DE CARTERA</h3>
</center>
<div id="filtros" align="center">
<form action="reportecompracartera.php" method="POST">
<b>Que quiere buscar </b><input type="text" name="filtro" placeholder="Filtro" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>			
   <?php
   //<p>&nbsp;</p>
   ?>

		
 <table align="center" cellspacing="3" cellpadding="3" border="3" border="1">   
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
			<th>Editar</th>
			</tr>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
		}
		while ($row = $result->fetch_assoc())
		{			
         ?>
			<tr align="center">
            <td><?php echo $row['cedula'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
			<td><?php echo $row['tasa'] ?></td>
			<td>$<?php echo $row['extracupo'] ?></td>
			<td>$<?php echo $row['cupodispo'] ?></td>
			<td><?php echo $row['potencialtdc'] ?></td>
			<td><?php echo $row['tel1'] ?></td>
			<td><?php echo $row['tel2'] ?></td>
			<td><?php echo $row['tel3'] ?></td>
			<td><?php echo $row['tel4'] ?></td>
			<td><?php echo $row['tel5'] ?></td>
			<td><?php echo $row['tel6'] ?></td>
			<td><?php echo $row['tel7'] ?></td>
			<td><?php echo $row['tel8'] ?></td>
			<td><?php echo $row['tel9'] ?></td>
			<td><?php echo $row['tel10'] ?></td>
			<td><?php echo $row['tel11'] ?></td>
			<td><?php echo $row['tel12'] ?></td>
			<td><?php echo $row['tel13'] ?></td>
			<td><?php echo $row['tel14'] ?></td>
			<td><?php echo $row['tel15'] ?></td>
			<td><?php echo $row['tel16'] ?></td>
			<td><?php echo $row['tel17'] ?></td>
			<td><?php echo $row['tel18'] ?></td>
			<td><?php echo $row['tel19'] ?></td>
			<td><?php echo $row['tel20'] ?></td>
			<td><?php echo $row['tel21'] ?></td>
			<td><?php echo $row['tel22'] ?></td>
			<td width="400"><?php echo $row['motivo1'] ?></td>
			<td width="400"><?php echo $row['motivo2'] ?></td>
			<td width="400"><?php echo $row['motivo3'] ?></td>
			<td><?php echo $row['tipificacion'] ?></td>
			<td><?php echo $row['detalletipi'] ?></td>
			<td><?php echo $row['Usuario'] ?></td>
			<td>
			<form action="editcompradmin.php" method="POST" onsubmit="return confirm('ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.');">
			<input type="hidden" name="idproducto" method="post" value="<?php echo $row['idproducto']?>">
			<button type="submit">EDITAR</button>
			</form>	
			</td>
		</tr>
            <?php } ?>
</table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
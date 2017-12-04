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
				$sql = "select * from prestamospersonales";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from prestamospersonales WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR cupo60 LIKE '%".$busqueda."%' OR cupo48 LIKE '%".$busqueda."%' OR tasa LIKE '%".$busqueda."%' OR cupoaprob LIKE '%".$busqueda."%' OR plazoaprob LIKE '%".$busqueda."%' OR cuota LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR fijoreal LIKE '%".$busqueda."%' OR celureal LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR tel8 LIKE '%".$busqueda."%' OR tel9 LIKE '%".$busqueda."%' OR tel10 LIKE '%".$busqueda."%' OR tel11 LIKE '%".$busqueda."%' OR tel12 LIKE '%".$busqueda."%' OR tel13 LIKE '%".$busqueda."%' OR tel14 LIKE '%".$busqueda."%' OR tel15 LIKE '%".$busqueda."%' OR tel16 LIKE '%".$busqueda."%' OR tel17 LIKE '%".$busqueda."%' OR tel18 LIKE '%".$busqueda."%' OR tel19 LIKE '%".$busqueda."%' OR tel20 LIKE '%".$busqueda."%' OR tel21 LIKE '%".$busqueda."%' OR tel22 LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%')";
				break;					
				}
	}else{
		$sql = "select * from prestamospersonales.;";
			}}
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="productos.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTES DE PRESTAMOS PERSONALES</title>
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
            <h3 style="color:blue;">REPORTES DE PRESTAMOS PERSONALES</h3>
</center>
<div id="filtros" align="center">
<form action="reporteprestamos.php" method="POST">
<b>Que quiere buscar </b><input type="text" name="filtro" placeholder="Filtro" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>			
   <?php
   //<p>&nbsp;</p>
   ?>
        <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			<?php
			echo "Prestamos Personales";
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
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
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
		}
		while ($row = $result->fetch_assoc())
		{			
         ?>
		<tr>
        <td align="cente" ><?php echo $row['cedula'] ?></td>
            <td align="center"><?php echo $row['nombre'] ?></td>
			<td align="center">$<?php echo $row['cupo60'] ?></td>
			<td align="center">$<?php echo $row['cupo48'] ?></td>
			<td align="center"><?php echo $row['tasa'] ?></td>
			<td align="center">$<?php echo $row['cupoaprob'] ?></td>
			<td align="center"><?php echo $row['plazoaprob'] ?></td>
			<td align="center">$<?php echo $row['cuota'] ?></td>
			<td align="center"><?php echo $row['direccion'] ?></td>
			<td align="center"><?php echo $row['barrio'] ?></td>
			<td align="center"><?php echo $row['localidad'] ?></td>
			<td align="center"><?php echo $row['fijoreal'] ?></td>
			<td align="center"><?php echo $row['celureal'] ?></td>
			<td align="center"><?php echo $row['tel1'] ?></td>
			<td align="center"><?php echo $row['tel2'] ?></td>
			<td align="center"><?php echo $row['tel3'] ?></td>
			<td align="center"><?php echo $row['tel4'] ?></td>
			<td align="center"><?php echo $row['tel5'] ?></td>
			<td align="center"><?php echo $row['tel6'] ?></td>
			<td align="center"><?php echo $row['tel7'] ?></td>
			<td align="center"><?php echo $row['tel8'] ?></td>
			<td align="center"><?php echo $row['tel9'] ?></td>
			<td align="center"><?php echo $row['tel10'] ?></td>
			<td align="center"><?php echo $row['tel11'] ?></td>
			<td align="center"><?php echo $row['tel12'] ?></td>
			<td align="center"><?php echo $row['tel13'] ?></td>
			<td align="center"><?php echo $row['tel14'] ?></td>
			<td align="center"><?php echo $row['tel15'] ?></td>
			<td align="center"><?php echo $row['tel16'] ?></td>
			<td align="center"><?php echo $row['tel17'] ?></td>
			<td align="center"><?php echo $row['tel18'] ?></td>
			<td align="center"><?php echo $row['tel19'] ?></td>
			<td align="center"><?php echo $row['tel20'] ?></td>
			<td align="center"><?php echo $row['tel21'] ?></td>
			<td align="center"><?php echo $row['tel22'] ?></td>
			<td align="center"><?php echo $row['tipificacion'] ?></td>
			<td align="center"><?php echo $row['detalletipi'] ?></td>
			<td align="center"><?php echo $row['Usuario'] ?></td>
			<td align="center">
			<form action="editpresadmin.php" method="POST" onsubmit="return confirm('ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.');">
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
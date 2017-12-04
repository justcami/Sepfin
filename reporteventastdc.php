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
				$sql = "select * from ventadetarjetas";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from ventadetarjetas WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%')";
				break;					
				}
	}else{
		$sql = "select * from ventadetarjetas.;";
			}}
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="productos.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTES VENTAS DE TARJETAS DE CREDITO</title>
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
            <h3 style="color:blue;">REPORTES VENTAS DE TARJETAS DE CREDITO</h3>
</center>
<div id="filtros" align="center">
<form action="reporteventastdc.php" method="POST">
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
			echo "Ventas de Tarjetas de Credito";
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
 <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
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
			<td align="center"><?php echo $row['estado'] ?></td>
			<td align="center"><?php echo $row['tel1'] ?></td>
			<td align="center"><?php echo $row['tel2'] ?></td>
			<td align="center"><?php echo $row['tel3'] ?></td>
			<td align="center"><?php echo $row['tel4'] ?></td>
			<td align="center"><?php echo $row['tel5'] ?></td>
			<td align="center"><?php echo $row['tel6'] ?></td>
			<td align="center"><?php echo $row['tel7'] ?></td>
			<td align="center"><?php echo $row['direccion'] ?></td>
			<td align="center"><?php echo $row['barrio'] ?></td>
			<td align="center"><?php echo $row['localidad'] ?></td>
			<td align="center"><?php echo $row['motivo1'] ?></td>
			<td align="center"><?php echo $row['motivo2'] ?></td>
			<td align="center"><?php echo $row['motivo3'] ?></td>
			<td align="center"><?php echo $row['tipificacion'] ?></td>
			<td align="center"><?php echo $row['detalletipi'] ?></td>
			<td align="center"><?php echo $row['Usuario'] ?></td>
			<td align="center">
			<form action="editventadmin.php" method="POST" onsubmit="return confirm('ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.');">
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
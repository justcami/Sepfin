<?php
include("seguridad.php");
include ('conexion.php');
error_reporting (0);
?>
<?php 
$Producto = $_REQUEST['Producto'];
$where="";
$busqueda=$_POST['filtro'];
if(isset($_POST['buscar']))
{
	$where = "WHERE cedula LIKE '%".$busqueda."%' OR codigo LIKE '%".$busqueda."%' OR codigosobre LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR observaciones LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tipitificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%' OR hora LIKE '%".$busqueda."%' OR fecha LIKE '%".$busqueda."%' OR asesor LIKE '%".$busqueda."%'";
}	
$sql = "select * from agendamientos $where";
$result = $con -> query($sql);	
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="main.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

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
.table1 {
	width:3000;
	font-size: 12px;
}
.table2 {
	width:auto;
}
-->
</style>

<title>REPORTES DE AGENDAMIENTOS SEPFIN</title>
<script language="JavaScript">
function aviso(url){
if (!confirm("ADVERTENCIA!!  Va a editar un agendamiento, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
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
            <h3 style="color:blue;">REPORTES DE AGENDAMIENTOS</h3>
</center>
<div id="filtros" align="center">
<table class="table2">
<tr>
<!-- CON ESTE FORM ENVIO LA PALABRA A BUSCAR PARA FILTRARLA Y MOSTRARLA EN PANTALLA-->
<form action="reporteagendamientos.php" method="POST">
<td><input type="text" name="filtro" placeholder="Que quiere buscar" method="post"></td>
<td><button name="buscar" type="submit">Filtrar</button></td>
</form>
<!-- CON ESTE FORM ENVIO LA PALABRA A BUSCAR PARA HACER LA CONSULTA Y DESCARGAR LA INFO FILTRADA-->
<form action="descargaagendamientos.php" method="POST">
<input type="hidden" name="busqueda2" method="post" value="<?php echo $busqueda;?>">
<td><button name="buscar" type="submit">DESCARGAR</button></td>
</form>
</tr>
</table><br>
</div>			
			
 <table class="table1" align="center" cellspacing="3" cellpadding="3" border="3" border="1">   
            <tr align="center">
			<td><b>Cedula</b></td>
            <td><b>Codigo</b></td>
            <td><b>Codigo Sobre</b></td>
			<td><b>Nombre</b></td>
			<td><b>Estado</b></td>
			<td><b>Direccion</b></td>
			<td><b>Barrio</b></td>
			<td><b>Localidad</b></td>
			<td><b>Observaciones</b></td>
			<td><b>Telefono 1</b></td>
			<td><b>Telefono 2</b></td>
			<td><b>Telefono 3</b></td>
			<td><b>Motivo 1</b></td>
			<td><b>Motivo 2</b></td>
			<td><b>Motivo 3</b></td>
			<td><b>Motivo 4</b></td>
			<td><b>Motivo 5</b></td>
			<td><b>Vendedor</b></td>
			<td><b>Tipificacion</b></td>
			<td><b>Detalle Tipificacion</b></td>
			<td><b>Fecha</b></td>
			<td><b>Hora</b></td>
			<td><b>Asesor</b></td>
			<td><b>Base</b></td>
			<td><b>Editar</b></td>
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
            <td><?php echo $row['codigo'] ?></td>
			<td><?php echo $row['codigosobre'] ?></td>
			<td><?php echo $row['nombre'] ?></td>
			<td><?php echo $row['estado'] ?></td>
			<td><?php echo $row['direccion'] ?></td>
			<td><?php echo $row['barrio'] ?></td>
			<td><?php echo $row['localidad'] ?></td>
			<td><?php echo $row['observaciones'] ?></td>
			<td><?php echo $row['tel1'] ?></td>
			<td><?php echo $row['tel2'] ?></td>
			<td><?php echo $row['tel3'] ?></td>
			<td><?php echo $row['motivo1'] ?></td>
			<td><?php echo $row['motivo2'] ?></td>
			<td><?php echo $row['motivo3'] ?></td>
			<td><?php echo $row['motivo4'] ?></td>
			<td><?php echo $row['motivo5'] ?></td>
			<td><?php echo $row['Usuario'] ?></td>
			<td><?php echo $row['tipitificacion'] ?></td>
			<td><?php echo $row['detalletipi'] ?></td>
			<td><?php echo $row['fecha'] ?></td>
			<td><?php echo $row['hora'] ?></td>
			<td><?php echo $row['asesor'] ?></td>
			<td><?php echo $row['base'] ?></td>
			<td><a href="javascript:;" onclick="aviso('/Sepfin/editagendaadmin.php?idagendamiento=<?php echo $row['idagendamiento']?>'); return false;">EDITAR</a></td>
		</tr>
            <?php } ?>
</table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
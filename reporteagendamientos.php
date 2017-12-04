<?php
include("seguridad.php");
include ('conexion.php');
error_reporting (0);
?>
<?php 
$busqueda=$_POST['filtro'];
if($busqueda==""){
	
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from agendamientos";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from agendamientos WHERE cedula LIKE '%".$busqueda."%' OR codigo LIKE '%".$busqueda."%' OR codigosobre LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR observaciones LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tipitificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%' OR hora LIKE '%".$busqueda."%' OR fecha LIKE '%".$busqueda."%' OR asesor LIKE '%".$busqueda."%'";
				break;					
				}
	}else{
		$sql = "select * from agendamientos;";
			}}
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="main.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<form action="agendamientos.php" method="POST">
<b>Que quiere buscar </b><input type="text" name="filtro" placeholder="Filtro" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>			

        <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			<?php
			echo "Agendamientos";
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
 <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Cedula</th>
            <th>Codigo</th>
            <th>Codigo Sobre</th>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Direccion</th>
			<th>Barrio</th>
			<th>Localidad</th>
			<th>Observaciones</th>
			<th>Telefono 1</th>
			<th>Telefono 2</th>
			<th>Telefono 3</th>
			<th>Motivo 1</th>
			<th>Motivo 2</th>
			<th>Motivo 3</th>
			<th>Motivo 4</th>
			<th>Motivo 5</th>
			<th>Vendedor</th>
			<th>Tipificacion</th>
			<th>Detalle Tipificacion</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Asesor</th>
			<th>Base</th>
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
            <td align="center"><?php echo $row['cedula'] ?></td>
            <td align="center"><?php echo $row['codigo'] ?></td>
			<td align="center"><?php echo $row['codigosobre'] ?></td>
			<td align="center"><?php echo $row['nombre'] ?></td>
			<td align="center"><?php echo $row['estado'] ?></td>
			<td align="center"><?php echo $row['direccion'] ?></td>
			<td align="center"><?php echo $row['barrio'] ?></td>
			<td align="center"><?php echo $row['localidad'] ?></td>
			<td align="center"><?php echo $row['observaciones'] ?></td>
			<td align="center"><?php echo $row['tel1'] ?></td>
			<td align="center"><?php echo $row['tel2'] ?></td>
			<td align="center"><?php echo $row['tel3'] ?></td>
			<td align="center"><?php echo $row['motivo1'] ?></td>
			<td align="center"><?php echo $row['motivo2'] ?></td>
			<td align="center"><?php echo $row['motivo3'] ?></td>
			<td align="center"><?php echo $row['motivo4'] ?></td>
			<td align="center"><?php echo $row['motivo5'] ?></td>
			<td align="center"><?php echo $row['Usuario'] ?></td>
			<td align="center"><?php echo $row['tipitificacion'] ?></td>
			<td align="center"><?php echo $row['detalletipi'] ?></td>
			<td align="center"><?php echo $row['fecha'] ?></td>
			<td align="center"><?php echo $row['hora'] ?></td>
			<td align="center"><?php echo $row['asesor'] ?></td>
			<td align="center"><?php echo $row['base'] ?></td>
			<td align="center"><a href="javascript:;" onclick="aviso('/Sepfin/editagendaadmin.php?idagendamiento=<?php echo $row['idagendamiento']?>'); return false;">EDITAR</a></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
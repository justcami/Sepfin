<?php
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');
error_reporting (0);
?>
<?php 
$busqueda = $_POST['filtro'];

if($busqueda==""){

$Disponible="";	
	
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from agendamientos WHERE EstadoRegistro='$Disponible'";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from agendamientos WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR codigo LIKE '%".$busqueda."%' OR codigosobre LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR observaciones LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tipitificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%' OR hora LIKE '%".$busqueda."%')";
				break;					
				}
	}else{
				$sql = "select * from agendamientos WHERE EstadoRegistro='$Disponible'";
			}}
?>
		<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>	
            <a href="../logout.php">Cerrar Sesion</a><br>
			<a href="gestion.php">Regresar</a><br>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GESTION DE AGENDAMIENTOS SEPFIN</title>
<link href="css2/estilo.css" rel="stylesheet">
<script src="js2/jquery.js"></script>
<script src="js2/myjava.js"></script>  
   </head>
   <body>         
<center>
            <img src="../img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">REPORTE DE AGENDAMIENTOS</h3>
</center>
<div id="filtros" align="center">
<form action="agendamientos.php" method="POST">
<b>Que quiere buscar </b><input type="text" name="filtro" placeholder="Filtro" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>		
        
		<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
          <tr>
           <td colspan="4" align="center" bgcolor="blue">
			<font color="#FFFFFF">
			 <strong>
			  Estos son los Clientes Agendados
			 </strong>
			</font>
		   </td>
          </tr>
        </table>
		<br>
		
<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
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
			<th>VENDEDOR</th>
			<th>TIPIFICACION</th>
			<th>DETALLE TIPIFICACION</th>
			<th>FECHA</th>
			<th>HORA</th>
			<th>ASESOR</th>
			<th>BASE</th>
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);//Con esta consultado traigo todos los campos de la tabla productos escogida o asignada
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
		}
		while ($row = $result->fetch_assoc())
		{			
         ?>
		<tr>
            <td align="cente" ><?php echo $row['cedula'] ?></td>
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
			<td align="center">
			<form action="/Sepfin/ventadetarjetas/editagendamiento.php" method="POST" onsubmit="return confirm('ADVERTENCIA!!  Va a modificar un agendamiento, esto altera la informacion de un agendamiento ya programado, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.');">
			<input type="hidden" name="idagendamiento" method="post" value="<?php echo $row['idagendamiento']?>">
			<button type="submit">EDITAR</button>
			</form>	
			</td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
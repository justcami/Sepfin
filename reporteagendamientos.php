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
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">
<script language="JavaScript">
function aviso(url){
if (!confirm("CUIDADO!!  Va a proceder a eliminar un usuario, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script>
<title>Usuarios Sepfin</title>
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
<div id="agendamientomovil">
<a href="logout.php">
<div id="iconoau" class="usu">
<img src="img/cerrarsesion.png" width="35" height="35" alt=""/>
</div>
</a>
<div id="iconobu" class="usu">Cerrar Sesion
</div>
<a href="main.php">
<div id="iconocu" class="usu">
<img src="img/regresar.png" width="29" height="29" alt=""/>
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
	<img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
</header>

<div id="filtroagenomovil">
<nav id="agendamientos">
	<ul>
		<li class="baner" id="recorda">Reportes de Agendamientos Sepfin</li>
	</ul>	
</nav>
<div id="divfiltro">	
	<ul >
		<li class="botonesagendamientoa">
			<form action="reporteagendamientos.php" method="POST">
			<input type="text" name="filtro" placeholder="Que quiere buscar" method="post">			
		</li>
		<li class="botonesagendamientoc">
		<button name="buscar" type="submit" class="botonagen">Filtrar</button>
			</form>
		</li></a>
		<li class="botonesagendamientob">
			<form action="descargaagendamientos.php" method="POST">
			<input type="hidden" name="busqueda2" method="post" value="<?php echo $busqueda;?>">
			<button name="buscar" type="submit" class="botonagen">Descargar</button>
			</form>
		</li></a>
	</ul>
</div>
</div>
 <center>
<br><br>
<!--<table class="agenda" border="1">-->
<table class="agenda">  
            <tr>
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
		<tr id="trba">
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
			<td>
				<ul id="editaragendamientos">
				<a href="javascript:;" onclick="aviso('editagendaadmin.php?idagendamiento=<?php echo $row['idagendamiento']?>'); return false;">
				<li class="editar" id="edagen">
				Editar</li></a>
				</ul>
			</td>
		</tr>
            <?php } ?>
</table>		
				
				
				
		 </center>
    </body>
</html>
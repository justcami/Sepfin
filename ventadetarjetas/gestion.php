<?php
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');
error_reporting (0);

$where="WHERE EstadoRegistro='$Disponible'";
$busqueda = $_POST['filtro'];
if(isset($_POST['buscar']))
{
	$where = "WHERE EstadoRegistro='$Disponible' AND (cedula LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%' OR estado LIKE '%".$busqueda."%' OR tel1 LIKE '%".$busqueda."%' OR tel2 LIKE '%".$busqueda."%' OR tel3 LIKE '%".$busqueda."%' OR tel4 LIKE '%".$busqueda."%' OR tel5 LIKE '%".$busqueda."%' OR tel6 LIKE '%".$busqueda."%' OR tel7 LIKE '%".$busqueda."%' OR direccion LIKE '%".$busqueda."%' OR barrio LIKE '%".$busqueda."%' OR localidad LIKE '%".$busqueda."%' OR tipificacion LIKE '%".$busqueda."%' OR detalletipi LIKE '%".$busqueda."%' OR Usuario LIKE '%".$busqueda."%' OR base LIKE '%".$busqueda."%')";
}	
$sql = "select * from ventadetarjetas $where";
$result = $con -> query($sql);
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="../css2/estilos.css" type="text/css" rel="stylesheet" media="">
<script language="JavaScript">
function aviso(url){
if (!confirm("CUIDADO!!  Va a proceder a editar un registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script>
<title>GESTION DE PRODUCTOS SEPFIN</title>
</head>
<body>
<div id="agendamientomovil">
<a href="../logout.php">
<div id="iconoau" class="usu">
<img src="../img/cerrarsesion.png" width="35" height="35" alt=""/>
</div>
</a>
<div id="iconobu" class="usu">Cerrar Sesion
</div>
<div id="iconoaedita" class="bienve">
	<ul>
		<li class="botonreporteagenda">	
		<form action="agendamientos.php" method="POST">
		<button name="buscar" type="submit" class="botonagen">AGENDADOS</button>
		</form>
		</li>
	</ul>
</div>
</a>
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
		<li class="baner" id="recorda">Gestion Venta de Tarjetas de Credito</li>
	</ul>	
</nav>
<div id="divfiltro">	
	<ul >
		<li class="botonesagendamientoa">
			<form action="gestion.php" method="POST">
			<input type="text" name="filtro" placeholder="Que quiere buscar" method="post">			
		</li>
		<li class="botonesagendamientoc">
		<button name="buscar" type="submit" class="botonagen">Filtrar</button>
			</form>
		</li></a>
	</ul>
</div>
</div>
 <center>
<br><br>
<table class="agenda">   
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
			<th>EDITAR</th>
			<th>AGENDAR</th>
			</tr>
                 <?php
		#$result = $con->query($sql);//Con esta consultado traigo todos los campos de la tabla productos escogida o asignada
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
			<td><?php echo $row['estado'] ?></td>
			<td><?php echo $row['tel1'] ?></td>
			<td><?php echo $row['tel2'] ?></td>
			<td><?php echo $row['tel3'] ?></td>
			<td><?php echo $row['tel4'] ?></td>
			<td><?php echo $row['tel5'] ?></td>
			<td><?php echo $row['tel6'] ?></td>
			<td><?php echo $row['tel7'] ?></td>
			<td><?php echo $row['direccion'] ?></td>
			<td><?php echo $row['barrio'] ?></td>
			<td><?php echo $row['localidad'] ?></td>
			<td><?php echo $row['motivo1'] ?></td>
			<td><?php echo $row['motivo2'] ?></td>
			<td><?php echo $row['motivo3'] ?></td>
			<td><?php echo $row['tipificacion'] ?></td>
			<td><?php echo $row['detalletipi'] ?></td>
			<td><?php echo $row['Usuario'] ?></td>
			<td>
				<ul id="editaragendamientos">
				<a href="editprousuario.php?idproducto=<?php echo $row['idproducto']?>">
				<li class="editar" id="edagen">
				Editar</li></a>
				</ul>
			</td>	
			<td>
				<?php
				$venta="VENTA";
					if ($row['tipificacion'] == $venta) 
					{
					$cedula=$row['cedula'];
				?>
				<ul id="editaragendamientos">
				<a href="agendar.php?idproducto=<?php echo $row['idproducto']?>">
				<li class="editar" id="edagen">
				Agendar</li></a>
				</ul>
			</td>		
		</tr>
            <?php }} ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
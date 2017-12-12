<?php
include("seguridad.php");
include("conexion.php");
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

<title>Productos Sepfin</title>

<script language="JavaScript">
function aviso(url){
if (!confirm("CUIDADO!!  Esto eliminara toda la agenda del producto y sus reportes, si ya realizo un backup de la informacion, los reportes y esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
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
<?php 
if (!empty($_GET[success])) { echo "<script> alert('Se cargaron los archivos exitosamente!'); location.href='productos.php'; </script>"; }//generic success notice 
?>
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
<header id="productos">
<div id="logoprestamos">
	<img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
</header>

<div id="filtroproducomovil">
	<form action="prueba.php" method="post" enctype="multipart/form-data" name="formselecciondelista" id="formselecciondelista" onsubmit="return dimePropiedades2()">
		<input type="hidden" name="Producto2"/>
	<ul>
		<li class="press" id="prestamosa">Cargar Contactos a los Productos</li>	
<div id="divbarracargar">	
		<li class="botonesprestamoa">
			<select name="Producto" id="Producto"> 
			<option value="0">Eliga su producto:</option>
			<?php
			$query = $con -> query ("SELECT * FROM productos");								
			while ($valores = mysqli_fetch_assoc($query)){
			echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
			}
			?>  
			</select>			
		</li>
		<li class="botonesprestamob">
		<input type="file" name="csv" id="csv"/>
		</li></a>
		<li class="botonesprestamoc">
			<input type="hidden" name="busqueda2" method="post" value="<?php echo $busqueda;?>">
			<button name="buscar" type="submit" class="botonproductos">Cargar</button>
		</li>
	<li class="press" id="productosb">Productos Sepfin</li>	
	</ul>
	</form>
</div>
</div>
 <center>
<table class="productos">   
         <tr>
		 <td><b>Productos</td></b>
         <td><b>Descripcion</td></b>
         <td><b>Eliminar Registros</td></b>
			<?php
			$sql = "select * from productos;";
			$result = $con->query($sql);
			if(!$result )
			{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
			}
			while ($row = $result->fetch_assoc())
			{			
			?>
		</tr>
		<tr>
            <?php
			$Producto=$row['Producto'];
			$Pres="Prestamos Personales";
			$Com="Compra de Cartera";
			$Ven="Venta de Tarjetas";
			if($Producto==$Pres){
			?> 
			<td><a href="reporteprestamos.php"><?php echo $row['Producto']?></a></td>
			<?php
			} else if($Producto==$Com){
			?>
			<td align="center"><a href="reportecompracartera.php"><?php echo $row['Producto']?></a></td>
			<?php
			} else if($Producto==$Ven) {
			?>
			<td><a href="reporteventastdc.php"><?php echo $row['Producto']?></a></td>
			<?php } ?>	
            <td><?php echo $row['Descripcion'] ?></td>
			<td>
			<ul>
			<a href="javascript:;" onclick="aviso('/Sepfin/borrarproducto.php?idproducto=<?php echo $row['idproducto']?>'); return false;">
			<li class="productos" id="pr">
			Eliminar</li></a>
			</ul>
			</td>
		</tr>
            <?php } ?>
</table>
		 </center>
    </body>
</html><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("templates/footer.php"); ?>
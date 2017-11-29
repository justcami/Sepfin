<?php
include("seguridad.php");
include("conexion.php");
error_reporting (0);
?>
<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
			
<?php 
$busqueda = $_POST['filtro'];
if($busqueda==""){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from productos";
				break;					
		}	
}else{
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from productos WHERE Producto='$busqueda' OR Descripcion='$busqueda';";
				break;					
		}
	}else{
		$sql = "select * from productos;";
	}
}
?>

            <a href="logout.php">Cerrar Sesion</a><br>
			<a href="main.php">Regresar al inicio</a><br><br>
<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title>Productos</title>
	
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
	<form action="guardarproductos.php" name="nombredeproducto" id="formularioproducto" method="post">
		Nombre Producto: <input type="text" name="NombredeProducto" id="producto"> <br>
		Descripción: <input type="text" name="Descripcion" id="descripcion"> <br>
		<input type="submit" value="Enviar"> <br>

	</form>
<div id="filtros" align="center">
<form action="productos.php" method="POST">
<b>Producto a buscar </b><input type="text" name="filtro" placeholder="Que quiero buscar" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>
	<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Eliminar</th>
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
		
            
			<td align="cente"><a href="reportesadmin.php?Producto=<?php echo $row['Producto']?>"><?php echo $row['Producto'] ?></a></td>
            <td align="center"><?php echo $row['Descripcion'] ?></td>
			<td align="center"><a href="javascript:;" onclick="aviso('/Sepfin/borrarproducto.php?idproducto=<?php echo $row['idproducto']?>'); return false;">ELIMINAR</a></td>
		</tr>
            <?php } ?>
        </table>
	
</body>
</html>
<?php include("templates/footer.php"); ?>

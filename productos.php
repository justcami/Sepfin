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
<style>	
<!--
table tr:nth-child(even) {
	background-color: #eee;
}
 
table tr:nth-child(odd) {
	background-color: #fff;
}
table {
	font-size: 12px;
}
body{
	margin:0px;
	background: #FFF;
	font-family:Arial;
	min-width:1000px;
}
h3{
	font-family:"Times New Roman", Georgia, Serif;
}
-->
</style>	
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
<?php 
if (!empty($_GET[success])) { echo "<script> alert('Se cargaron los archivos exitosamente!'); location.href='productos.php'; </script>"; }//generic success notice 
?>

		<form action="prueba.php" method="post" enctype="multipart/form-data" name="Selecciondelista" id="Selecciondelista" onsubmit="return dimePropiedades2()">
		<input type="hidden" name="Producto2" /> 
		<b><h>CARGAR CONTACTOS A LOS PRODUCTOS</h1></b><br><br>
        Archivo: <input name="csv" type="file" id="csv" /> <br><br>
		Producto: <select name="Producto" id="Producto"> 
        <option value="0">Eliga su producto:</option>
        <?php	
          $query = $con -> query ("SELECT * FROM productos");								
          while ($valores = mysqli_fetch_assoc($query)) {
            echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
          }
        ?>  

		</select> <br><br>
		<input type="submit" value="Enviar"> <br>

	</form>
<div id="filtros" align="center">
<h1><b>Productos Sepfin</b></h1>
</div>
	<table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>PRODUCTOS</th>
            <th>DESCRIPCION</th>
            <th>ELIMINAR REGISTROS</th>
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
		
            <?php
			$Producto=$row['Producto'];
			$Pres="Prestamos Personales";
			$Com="Compra de Cartera";
			$Ven="Venta de Tarjetas";
			if($Producto==$Pres){
			?> 
			<td align="center"><a href="reporteprestamos.php"><?php echo $row['Producto']?></a></td>
			<?php
			} else if($Producto==$Com){
			?>
			<td align="center"><a href="reportecompracartera.php"><?php echo $row['Producto']?></a></td>
			<?php
			} else if($Producto==$Ven) {
			?>
			<td align="center"><a href="reporteventastdc.php"><?php echo $row['Producto']?></a></td>
			<?php } ?>
			
            <td align="center"><?php echo $row['Descripcion'] ?></td>
			<td align="center"><a href="javascript:;" onclick="aviso('/Sepfin/borrarproducto.php?idproducto=<?php echo $row['idproducto']?>'); return false;">ELIMINAR</a></td>
		</tr>
            <?php } ?>
        </table>
	
</body>
</html>
<?php include("templates/footer.php"); ?>

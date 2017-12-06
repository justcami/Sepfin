<?php
include("seguridad.php");
include("conexion.php");
error_reporting (0);
?>
			<a href="logout.php">Cerrar Sesion</a><br>
			<a href="main.php">Regresar al inicio</a><br><br>
			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<style>	
<!--
table tr:nth-child(even) {
	background-color: #eee;
}
 
table tr:nth-child(odd) {
	background-color: #fff;
}
table {
	width: auto;
	text-align: center;
	font-size: 15px;
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
		$sql = "select * from productos;";
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

<?php
include("seguridad.php");
?>
<?php 
            echo "<b>Bienvenido: </b>";
            echo $user."<br>";
            ?>
            <a href="logout.php">Cerrar Sesion</a><br>
			<a href="main.php">Regresar al inicio</a><br><br>
<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title>Productos</title>
</head>
<body>
	<form action="guardarproductos.php" name="nombredeproducto" id="formularioproducto" method="post">
		Nombre Producto: <input type="text" name="NombredeProducto" id="producto"> <br>
		Descripción: <input type="text" name="Descripcion" id="descripcion"> <br>
		<input type="submit" value="Enviar"> <br>

	</form>
</body>
</html>

<?php
include("seguridad.php");
include ('conexion.php');
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
	<title>Numeros</title>

</head>
<body>
	<form action="lista.php" name="Seleccion de lista" id="formulariolista">
		Archivo: <input name="csv" type="file" id="csv" /> <br><br>
		Producto: <select name="Producto" id="iddeproducto"> 
        <option value="0">Eliga su producto:</option>
        <?php	
          $query = $con -> query ("SELECT * FROM productos");								
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
          }
        ?>
		</select> <br><br>
		<input type="submit" value="Enviar"> <br>

	</form>
</body>
</html>

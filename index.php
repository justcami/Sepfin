<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title>Numeros</title>

</head>
<body>
	<form action="lista.php" name="Seleccion de lista" id="formulariolista">
		Seleccione archivo: <input type="text" name="Ubicación de lista" id="lista"> <br>
		Producto: <select name="Producto" id="iddeproducto"> 
        <option value="0">Eliga su producto:</option>
        <?php	include ('conexion.php');
          $query = $con -> query ("SELECT * FROM productos");								
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
          }
        ?>
		</select> <br>
		<input type="submit" value="Enviar"> <br>

	</form>
</body>
</html>
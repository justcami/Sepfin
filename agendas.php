<?php
error_reporting (0);
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css2/estilo.css" rel="stylesheet">
        <script src="js2/jquery.js"></script>
        <script src="js2/myjava.js"></script>
	<title>Contactos de Productos</title>

</head>
<body>
<?php 



if (!empty($_GET[success])) { echo "<script> alert('Se cargaron los archivos exitosamente!'); location.href='main.php'; </script>"; }//generic success notice 
?>

		<form action="prueba.php" method="post" enctype="multipart/form-data" name="Selecciondelista" id="Selecciondelista" onsubmit="return dimePropiedades2()">
		<input type="hidden" name="Producto2" /> 
		
        Archivo: <input name="csv" type="file" id="csv" /> <br><br>
		Producto: <select name="Producto" id="Producto"> 
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

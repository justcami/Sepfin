<?php
error_reporting (0);
include("seguridad.php");
include ('conexion.php');
?>
<?php 
    echo "<b>Bienvenido: </b>";
    echo $user."<br>";
?>
 
<?php  

//$connect = mysql_connect("localhost","root",""); 
//mysql_select_db("contacts",$connect);

//if ($_FILES[csv][size] > 0) { 

//    $file = $_FILES[csv][tmp_name]; 
//    $handle = fopen($file,"r"); 
     
//    do { 
//        if ($data[0]) { 
//            mysql_query("INSERT INTO contacts (contact_first, contact_last, contact_email) VALUES 
//                ( 
//                    '".addslashes($data[0])."', 
//                    '".addslashes($data[1])."', 
//                    '".addslashes($data[2])."' 
//                ) 
//            "); 
//        } 
//    } while ($data = fgetcsv($handle,1000,",","'")); 
//    header('Location: agendas.php?success=1'); die; 

//} 

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
<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; }//generic success notice ?>
<form action="" method="post" enctype="multipart/form-data" name="Selecciondelista" id="formlista"> 
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

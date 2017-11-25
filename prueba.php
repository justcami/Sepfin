<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$base= $_POST['Producto'];
$q = $con -> query ("SELECT Producto FROM productos WHERE idproducto = '$base'");  
$ret = mysqli_fetch_array($q);
$final= $ret[0];
echo $final;

$connect = $con;
if ($_FILES[csv][size] > 0) { 

    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    do { 
        if ($data[0]) {
            $con -> query ("INSERT INTO $final (idproducto, Nombre, Apellido, Telefono) VALUES ( '','".addslashes($data[0])."','".addslashes($data[1])."','".addslashes($data[2])."')");
             
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 
    header('Location: agendas.php?success=1'); die; 

} 
?>
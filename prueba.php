<?php 
include("seguridad.php");
include ('conexion.php');
error_reporting (0);

$base= $_POST['Producto'];
$q = $con -> query ("SELECT Producto FROM productos WHERE idproducto = '$base'");  
$ret = mysqli_fetch_array($q);
$final= $ret[0];

$phrase = $final;
				$espacio = array(" ");
				$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

$prestamos = "PrestamosPersonales";
$compra = "CompradeCartera";
$venta = "VentadeTarjetas";

$f=$_FILES[csv][size];
if ($f > 0) { 
	
    $file = $_FILES[csv][tmp_name];
	$handle = fopen($file,"r"); 
	
	$first = false;
	while ($data = fgetcsv($handle,1000,",","'")){

if( !$first ) {
      $first = true;
	  continue;
	  }		
	if ($data[0]) {

	//echo $newphrase;
if($newphrase==$prestamos){
$con -> query ("INSERT INTO $newphrase (idproducto, cedula, nombre, cupo60, cupo48, tasa, cupoaprob, plazoaprob, cuota, direccion, barrio, localidad, fijoreal, celureal, tel1, tel2, tel3, tel4, tel5, tel6, tel7, tel8, tel9, tel10, tel11, tel12, tel13, tel14, tel15, tel16, tel17, tel18, tel19, tel20, tel21, tel22, motivo1, motivo2, motivo3)
VALUES ( '','".addslashes($data[0])."','".addslashes($data[1])."','".addslashes($data[2])."','".addslashes($data[3])."','".addslashes($data[4])."','".addslashes($data[5])."','".addslashes($data[6])."','".addslashes($data[7])."','".addslashes($data[8])."','".addslashes($data[9])."','".addslashes($data[10])."','".addslashes($data[11])."','".addslashes($data[12])."','".addslashes($data[13])."','".addslashes($data[14])."','".addslashes($data[15])."','".addslashes($data[16])."','".addslashes($data[17])."','".addslashes($data[18])."','".addslashes($data[19])."','".addslashes($data[20])."','".addslashes($data[21])."','".addslashes($data[22])."','".addslashes($data[23])."','".addslashes($data[24])."','".addslashes($data[25])."','".addslashes($data[26])."','".addslashes($data[27])."','".addslashes($data[28])."','".addslashes($data[29])."','".addslashes($data[30])."','".addslashes($data[31])."','".addslashes($data[32])."','".addslashes($data[33])."','".addslashes($data[34])."','".addslashes($data[35])."','".addslashes($data[36])."','".addslashes($data[37])."')");
}

else if($newphrase==$compra){
	$con -> query ("INSERT INTO $newphrase (idproducto, cedula, nombre, tasa, extracupo, cupodispo, potencialtdc, tel1, tel2, tel3, tel4, tel5, tel6, tel7, tel8, tel9, tel10, tel11, tel12, tel13, tel14, tel15, tel16, tel17, tel18, tel19, tel20, tel21, tel22, motivo1, motivo2, motivo3)
VALUES ( '','".addslashes($data[0])."','".addslashes($data[1])."','".addslashes($data[2])."','".addslashes($data[3])."','".addslashes($data[4])."','".addslashes($data[5])."','".addslashes($data[6])."','".addslashes($data[7])."','".addslashes($data[8])."','".addslashes($data[9])."','".addslashes($data[10])."','".addslashes($data[11])."','".addslashes($data[12])."','".addslashes($data[13])."','".addslashes($data[14])."','".addslashes($data[15])."','".addslashes($data[16])."','".addslashes($data[17])."','".addslashes($data[18])."','".addslashes($data[19])."','".addslashes($data[20])."','".addslashes($data[21])."','".addslashes($data[22])."','".addslashes($data[23])."','".addslashes($data[24])."','".addslashes($data[25])."','".addslashes($data[26])."','".addslashes($data[27])."','".addslashes($data[28])."','".addslashes($data[29])."','".addslashes($data[30])."')");
}
else if($newphrase==$venta){
	   $con -> query ("INSERT INTO ventadetarjetas (idproducto, cedula, nombre, estado, tel1, tel2, tel3, tel4, tel5, tel6, tel7, direccion, barrio, localidad, motivo1, motivo2, motivo3)
VALUES ( '','".addslashes($data[0])."','".addslashes($data[1])."','".addslashes($data[2])."','".addslashes($data[3])."','".addslashes($data[4])."','".addslashes($data[5])."','".addslashes($data[6])."','".addslashes($data[7])."','".addslashes($data[8])."','".addslashes($data[9])."','".addslashes($data[10])."','".addslashes($data[11])."','".addslashes($data[12])."','".addslashes($data[13])."','".addslashes($data[14])."','".addslashes($data[15])."')");

}
}
}
header('Location: productos.php?success=1'); die;
}
?>
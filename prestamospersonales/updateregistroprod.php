<?php
include("../seguridad3.php");
include ('../conexion3.php');
include ('../conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$cedula = $_POST['Cedula'];
$nombre = $_POST['Nombre'];
$cupo60 = $_POST['Cupo60'];
$cupo48 = $_POST['Cupo48'];
$tasa = $_POST['Tasa'];
$Cupoaprob = $_POST['Cupoaprob'];
$plazoaprob = $_POST['plazoaprob'];
$cuota = $_POST['cuota'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$fijoreal = $_POST['fijoreal'];
$celureal = $_POST['celureal'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$tel3 = $_POST['tel3'];
$tel4 = $_POST['tel4'];
$tel5 = $_POST['tel5'];
$tel6 = $_POST['tel6'];
$tel7 = $_POST['tel7'];
$tel8 = $_POST['tel8'];
$tel9 = $_POST['tel9'];
$tel10 = $_POST['tel10'];
$tel11 = $_POST['tel11'];
$tel12 = $_POST['tel12'];
$tel13 = $_POST['tel13'];
$tel14 = $_POST['tel14'];
$tel15 = $_POST['tel15'];
$tel16 = $_POST['tel16'];
$tel17 = $_POST['tel17'];
$tel18 = $_POST['tel18'];
$tel19 = $_POST['tel19'];
$tel20 = $_POST['tel20'];
$tel21 = $_POST['tel21'];
$tel22 = $_POST['tel22'];
$Tipificacion = $_POST['Tipificacion'];
$DetalleTipi = $_POST['detalletipi'];
$fecha = date("Y-m-d h:i:s A");
$hora = $_POST['hora'];
$asesor = $_POST['asesor'];
$Libre = "";

//Buscar la tabla asignada al usuario
$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.
					
$phrase  = $rowproducto;
$espacio = array(" ");
$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

$Prestamos = "Prestamos Personales";
$Compra = "Compra de Cartera";
$Venta = "Venta de Tarjetas";					

$up = $con -> query ("UPDATE $newphrase SET idproducto='$idproducto',cedula='$cedula',nombre='$nombre',cupo60='$cupo60',cupo48='$cupo48',tasa='$tasa',cupoaprob='$Cupoaprob',plazoaprob='$plazoaprob',cuota='$cuota',direccion='$direccion',barrio='$barrio',localidad='$localidad',fijoreal='$fijoreal',celureal='$celureal',tel1='$tel1',tel2='$tel2',tel3='$tel3',tel4='$tel4',tel5='$tel5',tel6='$tel6',tel7='$tel7',tel8='$tel8',tel9='$tel9',tel10='$tel10',tel11='$tel11',tel12='$tel12',tel13='$tel13',tel14='$tel14',tel15='$tel15',tel16='$tel16',tel17='$tel17',tel18='$tel18',tel19='$tel19',tel20='$tel20',tel21='$tel21',tel22='$tel22',tipificacion='$Tipificacion',detalletipi='$DetalleTipi',fecha='$fecha',hora='$hora',vendedor='$asesor',EstadoRegistro='$Libre',Usuario='$nuusuario'
WHERE idproducto='$idproducto'");
if ($up) {
if($rowproducto==$Prestamos){
echo
		"<script>
		alert('Registro Actualizado Exitosamente');
        location.href='/Sepfin/prestamospersonales/gestion.php';
        </script>";
} else if($rowproducto==$Compra){
echo
		"<script>
		alert('Registro Actualizado Exitosamente');
        location.href='/Sepfin/compradecartera/gestion.php';
        </script>";	
} else if($rowproducto==$Venta){
echo
		"<script>
		alert('Registro Actualizado Exitosamente');
        location.href='/Sepfin/ventadetarjetas/gestion.php';
        </script>";	
}
		}else{
    if($rowproducto==$Prestamos){
echo
		"<script>
        alert('Epa!! Algo Paso');
        location.href='/Sepfin/prestamospersonales/gestion.php';
        </script>";
} else if($rowproducto==$Compra){
echo
		"<script>
		alert('Epa!! Algo Paso');
        location.href='/Sepfin/compradecartera/gestion.php';
        </script>";	
} else if($rowproducto==$Venta){
echo
		"<script>
		alert('Epa!! Algo Paso');
        location.href='/Sepfin/ventadetarjetas/gestion.php';
        </script>";	
} 
}}}
?>
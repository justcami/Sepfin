<?php
include("seguridad.php");
include ('conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$cedula = $_POST['Cedula'];
$nombre = $_POST['Nombre'];
$tasa = $_POST['Tasa'];
$extracupo = $_POST['extracupo'];
$cupodispo = $_POST['cupodispo'];
$potencialtdc = $_POST['potencialtdc'];
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
$motivo1 = $_POST['motivo1'];
$motivo2 = $_POST['motivo2'];
$motivo3 = $_POST['motivo3'];
$Tipificacion = $_POST['Tipificacion'];
$DetalleTipi = $_POST['detalletipi'];
$banco = $_POST['banco'];
$tipotarjetafop = $_POST['tipotarjetafop'];
$franquiciaf = $_POST['franquiciaf'];
$aliadop = $_POST['aliadop'];
$notarbancoemisor = $_POST['notarbancoemisor'];
$valorcompra = $_POST['valorcompra'];
$nocuotas = $_POST['nocuotas'];
$telefono = $_POST['telefono'];
$fecha = date("Y-m-d h:i:s A");

$up = $con -> query ("UPDATE compradecartera SET idproducto='$idproducto',cedula='$cedula',nombre='$nombre',tasa='$tasa',extracupo='$extracupo',cupodispo='$cupodispo',potencialtdc='$potencialtdc',tel1='$tel1',tel2='$tel2',tel3='$tel3',tel4='$tel4',tel5='$tel5',tel6='$tel6',tel7='$tel7',tel8='$tel8',tel9='$tel9',tel10='$tel10',tel11='$tel11',tel12='$tel12',tel13='$tel13',tel14='$tel14',tel15='$tel15',tel16='$tel16',tel17='$tel17',tel18='$tel18',tel19='$tel19',tel20='$tel20',tel21='$tel21',tel22='$tel22',motivo1='$motivo1',motivo2='$motivo2',motivo3='$motivo3',tipificacion='$Tipificacion',detalletipi='$DetalleTipi',banco='$banco',tipotarjetafop='$tipotarjetafop',franquiciaf='$franquiciaf',aliadop='$aliadop',notarbancoemisor='$notarbancoemisor',valorcompra='$valorcompra',nocuotas='$nocuotas',telefono='$telefono',fecha='$fecha'
WHERE idproducto='$idproducto'");

if ($up) {
echo
		"<script>
		alert('Registro Actualizado Exitosamente');
        location.href='reportecompracartera.php';
        </script>";
}else{
echo
		"<script>
		alert('Epa!! Algo Paso, no se pudo Actualizar el Registro');
        location.href='reportecompracartera.php';
        </script>";	
}
?>
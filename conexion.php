<?php
$con = new mysqli('localhost','root','','sepfin') or die('No se pudo conectar a la base de datos');
$acentos = $con->query("SET NAMES 'utf8'");
?>

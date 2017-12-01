<?php
include("seguridad.php");
include ('conexion3.php');
include ('conexion.php');
error_reporting (0);
?>
<?php 
$Producto = $_REQUEST['Producto'];
$busqueda=$_POST['filtro'];
if($busqueda==""){
	
		switch($_POST['filtro']){
			case $busqueda:
				$phrase = $Producto;
				$espacio = array(" ");
				$sin   = array("");
				$newphrase = str_replace($espacio, $sin, $phrase);
				$sql = "select * from $newphrase";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$sql = "select * from $newphrase WHERE Nombre='$busqueda' OR Apellido='$busqueda' OR Telefono='$busqueda' OR Usuario='$busqueda'";
				break;					
				}
	}else{
		$sql = "select * from $newphrase.;";
			}}
?>
			
            <a href="logout.php">Cerrar Sesion</a><br>
<a href="productos.php">Regresar al inicio</a><br><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTES DE PRODUCTOS SEPFIN</title>
<script language="JavaScript">
function aviso(url){
if (!confirm("ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script> 
   </head>
   <body>         
<center>
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">REPORTES DE PRODUCTOS</h3>
</center>
<div id="filtros" align="center">
<form action="reportesadmin.php?Producto=<?php echo $Producto;?>" method="POST">
<b>Que quiere buscar </b><input type="text" name="filtro" placeholder="Filtro" method="post">            
<button type="submit">Filtrar</button>
</form>
</div>			
   <?php
   //<p>&nbsp;</p>
   ?>
        <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>
            <tr>
            <td colspan="4" align="center" bgcolor="blue"><font color="#FFFFFF"><strong>
			<?php
			echo $Producto;
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
 <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
			<th>Usuario</th>
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);
		if(!$result )
		{
		 	die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
		}
		while ($row = $result->fetch_assoc())
		{			
         ?>
		<tr>
            <td align="cente"><?php echo $row['Nombre'] ?></td>
            <td align="center"><?php echo $row['Apellido'] ?></td>
			<td align="center"><?php echo $row['Telefono'] ?></td>
			<td align="center"><?php echo $row['Usuario'] ?></td>
			<td align="center"><a href="javascript:;" onclick="aviso('/Sepfin/editproadmin.php?idproducto=<?php echo $row['idproducto']?>?Producto=<?php echo $Producto?>'); return false;">EDITAR</a></td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
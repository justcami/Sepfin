<?php
include("seguridad2.php");
include ('conexion3.php');
include ('conexion.php');
error_reporting (0);
?>
<?php 
$busqueda = $_POST['filtro'];

$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.
if($busqueda==""){

$Disponible="";	
	
		switch($_POST['filtro']){
			case $busqueda:
				$phrase = $rowproducto;
				$espacio = array(" ");
				$sin   = array("");
				$newphrase = str_replace($espacio, $sin, $phrase);
				$sql = "select * from $newphrase WHERE EstadoRegistro='$Disponible'";
				break;					
}
 }else{			
	if(isset($_POST['filtro'])){
		switch($_POST['filtro']){
			case $busqueda:
				$phrase = $rowproducto;
				$espacio = array(" ");
				$sin   = array("");
				$newphrase = str_replace($espacio, $sin, $phrase);
				$sql = "select * from $newphrase WHERE EstadoRegistro='$Disponible' AND Nombre='$busqueda' OR Apellido='$busqueda' OR Telefono='$busqueda'";
				break;					
				}
	}else{
				$phrase = $rowproducto;
				$espacio = array(" ");
				$sin   = array("");
				$newphrase = str_replace($espacio, $sin, $phrase);
				$sql = "select * from $newphrase WHERE EstadoRegistro='$Disponible'";
			}}}}
?>
		<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>	
            <a href="logout.php">Cerrar Sesion</a><br>			
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GESTION DE PRODUCTOS SEPFIN</title>
<link href="css2/estilo.css" rel="stylesheet">
<script src="js2/jquery.js"></script>
<script src="js2/myjava.js"></script>  
   </head>
   <body>         
<center>
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
            <h3 style="color:blue;">GESTION DE PRODUCTOS</h3>
</center>
<div id="filtros" align="center">
<form action="gestion.php" method="POST">
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
			Su Producto Asignado es: <?php
			
			$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
			$row_cnt = $busprod->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $busprod->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					#etc.
					$str = strtoupper($rowproducto);
					echo $str;
			}}
			?>
			</strong></font></td>
            </tr>
        </table> <br>
		
 <table align="center" cellspacing="5" cellpadding="5" border="3" border="1" bgcolor=dddddd>   
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
			<th>Editar</th>
                 <?php
		$result = $con->query($sql);//Con esta consultado traigo todos los campos de la tabla productos escogida o asignada
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
			<td align="center">
			<form action="/Sepfin/editprousuario.php" method="POST" onsubmit="return confirm('ADVERTENCIA!!  Va a editar un producto, esto altera la informacion de ese registro, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.');">
			<input type="hidden" name="idproducto" method="post" value="<?php echo $row['idproducto']?>">
			<button type="submit">EDITAR</button>
			</form>	
			</td>
		</tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php include("templates/footer.php"); ?>
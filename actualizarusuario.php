<?php 
include("seguridad.php");
include 'conexion3.php';
include 'conexion.php';

$id_usuario = $_REQUEST['id_usuario'];

$sel = $con3 ->query("SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
if ($fila = $sel ->fetch_assoc()){
}
$cero=0;
$uno=1;
$numeroperfil = $fila['Nivel_Usuario'];
if($numeroperfil==$cero){
$perfil="Administrador";	
}else if($numeroperfil==$uno){
$perfil="Agente";
}
?>


<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">
<title>Formulario Edicion de Usuarios</title>
</head>
<body>
	<header id="crear">
        <div id="logocrear">
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
		</div>
		<a href="usuarios.php">
		<div id="iconoac" class="crea">
		<img src="img/regresar.png" width="29" height="29" alt=""/>
		</div>
		</a>
		<div id="iconobc" class="crea">Regresar
		</div>		
    </header>
	<div id="formulariocrear">
	    <form action="updateusuario.php" method="POST">
		<input type="hidden" name="id_usuario2" value="<?php echo $id_usuario ?>" />
			<h4>EDICION DE USUARIOS</h4>
				<input type="text" name="NombreyApellido" value="<?php echo $fila['Nombre'] ?>" required>
				<input type="text" class="logo" name="usuario" value="<?php echo $fila['usuario'] ?>" required>
				<input type="password" class="logo" name="passw" value="<?php echo $fila['contrasena'] ?>" required>
				<select name="perfil">
				<option><?php echo $perfil ?></option>
				<option>Administrador</option>
				<option>Agente</option>
				</select>
				<select name="Producto" id="Producto"> 
				<option><?php echo $fila['producto'] ?></option>
				<?php	
				$query = $con -> query ("SELECT * FROM productos");								
				while ($valores = mysqli_fetch_assoc($query)) {
				echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
				}
				?> 
				</select>
				<input type="submit" value="Actualizar">
        </form>    
	</div>
</body>
</html>
<?php include("templates/footer.php"); ?>
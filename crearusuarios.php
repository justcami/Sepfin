<?php
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">
<title>Identifiquese</title>
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
	    <form action="guardarusuarios.php" method="POST">
			<h4>REGISTRO DE NUEVOS USUARIOS</h4>
				<input type="text" name="nombrecompleto" placeholder="Nombre y Apellido" required>
				<input type="text" class="logo" name="usuario" placeholder="Usuario" required>
				<input type="password" class="logo" name="password" placeholder="Contraseña" required>
				<select name="perfil">
				<option value="0">Asigne un Perfil:</option>
				<option>Administrador</option>
				<option>Agente</option>
				</select>
				<select name="Producto" id="Producto"> 
				<option value="0">Asigne un Producto:</option>
				<?php	
				$query = $con -> query ("SELECT * FROM productos");								
				while ($valores = mysqli_fetch_assoc($query)) {
				echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';}
				?> 
				</select>
				<input type="submit" value="Registrar">
        </form>    
	</div>
</body>
</html>
<?php include("templates/footer.php"); ?>

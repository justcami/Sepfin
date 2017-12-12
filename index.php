<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">
<title>Identifiquese</title>
</head>
<body>
	<header id="index">
        <div id="logo">
            <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
		<div>	
    </header>
	<div id="formulario">
	    <form action="validar.php" method="POST">
			<h4>ACCESO CRM SEPFIN - IDENTIFIQUESE</h4>
				<input type="text" name="usuario" placeholder="Usuario" class="logo" required>
				<input type="password" name="pass" placeholder="Contraseña" class="logo" required>
				<input type="submit" value="Ingresar">
        </form>    
	</div>
</body>
</html>
<?php include("templates/footer.php"); ?>

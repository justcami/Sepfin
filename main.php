<?php
include("seguridad.php");
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">

<title></title>
</head>
<body>
<header id="main">
<div id="logomain">
	<img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
<div class="bienve" id="main">
			<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
</div>
<a href="logout.php">
<div id="iconoa" class="cerrar">
<img src="img/cerrarsesion.png" width="42" height="42" alt=""/>
</div>
</a>
<div id="iconob" class="cerrar">Cerrar Sesion
</div>
</header>

<nav id="main">
	<ul>
		<a href="productos.php"><li class="menu">Productos</li></a>
		<a href="reporteagendamientos.php"><li class="menu">Agendamientos</li></a>
		<a href="usuarios.php"><li class="menu">Usuarios</li></a>
	</ul>	
</nav>
</body>
</html>
<?php include("templates/footer.php"); ?>
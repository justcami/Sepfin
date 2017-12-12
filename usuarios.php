<?php
include("seguridad.php");
include ('conexion3.php');
?>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="css2/estilos.css" type="text/css" rel="stylesheet" media="">
<script language="JavaScript">
function aviso(url){
if (!confirm("CUIDADO!!  Va a proceder a eliminar un usuario, si esta seguro de click en ACEPTAR, de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script>
<title>Usuarios Sepfin</title>
</head>

<body>
<header id="user">
<div id="logouser">
	<img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>
</div>
<div class="bienve" id="usuarios">
			<?php 
            echo "<b>Bienvenido: </b>";
            echo $nuusuario."<br>";
            ?>
</div>
<a href="logout.php">
<div id="iconoau" class="usu">
<img src="img/cerrarsesion.png" width="35" height="35" alt=""/>
</div>
</a>
<div id="iconobu" class="usu">Cerrar Sesion
</div>
<a href="main.php">
<div id="iconocu" class="usu">
<img src="img/regresar.png" width="29" height="29" alt=""/>
</div>
</a>
<div id="iconodu" class="usu">Regresar
</div>
</header>

<nav id="usuarios">
	<ul>
		<li class="baner" id="record">Registro Usuarios Plataforma Sepfin</li>
		<a href="crearusuarios.php"><li class="baner" id="crear">Crear Usuarios</li></a>
	</ul>	
</nav>
<br>
 <center>
        <table class="usua">   
            <tr>
				<th>Nombre</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Nivel Usuario</th>
				<th>Producto</th>
				<th>Estado</th>
				<th>Editar</th>
				<th>Eliminar</th>
				<?php
				$sel = $con3 -> query("SELECT * FROM usuarios");
				while ($fila = $sel ->fetch_assoc()){                
				?>
			</tr>
			<tr id="trb">
				<td align="cente"><?php echo $fila['Nombre'] ?></td>
				<td align="center"><?php echo $fila['usuario'] ?></td>
				<td align="center"><input type="password" value="<?php echo $fila['contrasena']?>" readonly></input></td>
				<td align="center">
				<?php 
				$perfil = $fila['Nivel_Usuario'];
			
				if ($perfil==0)
				{
				$perfiladmin="Administrador";
				}else{
				$perfiladmin="Agente";
				} 
				echo $perfiladmin;
				?>
				</td>
				<td><?php echo $fila['producto'] ?></td>
				<td align="center">
				<?php
			
				$perfil2 = $fila['cuentalogerroneo'];
				$usuario3 = $fila['usuario'];
				if ($perfil2<3)
				{
				$perfiladmin="Activo";
				echo $perfiladmin;
				}else{	
				$estadobloq  =  "<label class=desblo>Desbloquear</label>"; 
				$us=$fila['usuario'];
				echo "<a href=/Sepfin/desbloqueouser.php?usuario=$us>$estadobloq</a>";} 
				?>
				</td>
				<td>
				<ul>
				<a href="actualizarusuario.php?id_usuario=<?php echo $fila['id_usuario'] ?>">
				<li class="editar" id="ed">
				Editar</li></a>
				</ul>
				</td>
				<td>
				<ul>
				<a href="javascript:;" onclick="aviso('borrarusuario.php?id_usuario=<?php echo $fila['id_usuario']?>'); return false;">
				<li class="borrar" id="bor">
				Eliminar</li></a>
				</ul>
				</td>
			</tr>
            <?php } ?>
        </table>
		 </center>
    </body>
</html>
<?php include("templates/footer.php"); ?>
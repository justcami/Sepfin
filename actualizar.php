<?php 
include("seguridad.php");
include 'conexion3.php';
include 'conexion.php';

$id_usuario = $_REQUEST['id_usuario'];

$sel = $con3 ->query("SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
if ($fila = $sel ->fetch_assoc()){
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario Edicion de Usuarios</title>
        <link href="css2/estilo.css" rel="stylesheet">
        <script src="js2/jquery.js"></script>
        <script src="js2/myjava.js"></script>   
   </head>
   <body>
<br>
            <a href="usuarios.php/">Regresar Sin Realizar Cambios</a>   
   <header>
       <img src="img/Marca_AXTRAC.png" width="247" height="115" alt=""/>      
       <p> EDICION DE USUARIOS </p>
   </header>
       <form id="form1" name="form1" action="update.php" method="post" onsubmit="return dimePropiedades()">
           <input type="hidden" name="id_usuario2" value="<?php echo $id_usuario ?>" />
      <table width="100" border="3" align="center">
  <tr>
    <td> <section>
    Nombre y Apellido: <input type="text" name="NombreyApellido" value="<?php echo $fila['Nombre'] ?>"><br> 
	Usuario: <input type="text" name="usuario" value="<?php echo $fila['usuario'] ?>"><br>
    Contrasena: <input type="text" name="passw" value="<?php echo $fila['contrasena'] ?>"><br>
    Perfil: <select name="perfil">
            <option>Administrador</option>
            <option>Agente</option>
        </select><br>
	Producto: <select name="Producto" id="Producto"> 
        <option value="0">Asigne un producto:</option>
        <?php	
          $query = $con -> query ("SELECT * FROM productos");								
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
          }
        ?> 
		</select> <br><br>
	<input type="submit" value="Enviar" align="right">
    
    <input type="submit" value="Actualizar" align="right">
    </form>
   </section></td>
  </tr>
</table>
   </body>
    </html>
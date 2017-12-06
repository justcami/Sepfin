<?php
include("seguridad.php");
?>
<a href="../usuarios.php/">Regresar</a><br><br>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<style>	
<!--
body{
	margin:2px;
	background: #FFF;
	font-family:"Times New Roman", Georgia, Serif;
	min-width:1000px;
}
a{
	font-family:"Times New Roman", Georgia, Serif;
}
-->
</style>
<title>Registro Usuario Plataforma Sepfin</title>
<link href="../css2/estilo.css" rel="stylesheet">
   </head>
   <body>
   <br>    
   <header>
       <img src="../img/Marca_AXTRAC.png" width="184" height="85" alt=""/>      
       <p>REGISTRO DE NUEVOS USUARIOS</p>
   </header>
   <form action="../guardarusuarios.php" name="nombreusuarios" id="formulariousuarios" method="post">
      <table width="100" border="3" align="center">
  <tr>
    <td> <section>
    Nombre y Apellido: <input type="text" name="nombrecompleto"><br> 
    Usuario: <input type="text" name="usuario"><br>
    Contrasena: <input type="text" name="password"><br>
    Perfil: <select name="perfil">
            <option>Administrador</option>
            <option>Agente</option>
        </select><br>
	Producto: <select name="Producto" id="Producto"> 
        <option value="0">Asigne un producto:</option>
        <?php	
          $query = $con -> query ("SELECT * FROM productos");								
          while ($valores = mysqli_fetch_assoc($query)) {
            echo '<option value="'.$valores['idproducto'].'">'.$valores['Producto'].'</option>';
          }
        ?> 
		</select> <br><br>	
	<input type="submit" value="Enviar" align="right">
    </form>
   </section></td>
  </tr>
</table>
   </body>
</html>
<?php include("templates/footer.php"); ?>
<?php
include("conexion3.php");

        $usuario = $_REQUEST['usuario']; 
        $pass = $_REQUEST['pass'];
		
			$buscuenta = $con3 -> query ("SELECT * FROM usuarios WHERE usuario='$usuario'");
			$row_cnt = $buscuenta->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowcuentalogin = $buscuenta->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowcuentalogerroneo = $rowcuentalogin['cuentalogerroneo'];
					$rowcuentalogin = $rowcuentalogin['cuentalogin'];				
					#etc.
			if($rowcuentalogerroneo==3){
			echo 
		"<script>
        alert('Su Cuenta Esta Bloqueada, porfavor Contacte al Administrador');
        location.href='index.php';
        </script>";	
			}else{						
			if($rowcuentalogin==0 AND $usuario!="admin"){
			echo 
		"<script>
        alert('Es su primer ingreso, debe cambiar la contraseña');
        location.href='cambiopassworduser.php?usuario=$usuario';
        </script>";
			}else{				
					
        if(empty($usuario) || empty($pass)){
            header("Location:index.php");
            exit();
        }        
            else {	
			$mysqli = new mysqli('localhost', 'root', '','sistema');}
			$result = $mysqli-> query("SELECT * FROM usuarios WHERE usuario = '".$usuario."'");         
			$row_cnt = $result->num_rows;
			if($row_cnt>0){
			if($row = $result->fetch_object()){
                if($row -> contrasena == $pass){
                    session_start();
					$_SESSION['id']=$row-> id_usuario; // descargo id de la bd
                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["pass"] = $pass;
					$_SESSION['Nombre'] = $row->Nombre;
					$_SESSION['nuser'] = $row->Nivel_Usuario;
					$_SESSION['producto'] = $row->producto;
					$nombreu=$row->Nombre;
					$producto=$row->producto;
					$ns=$row->Nivel_Usuario; // descargo el niver de usuario
					//Nombro las tablas de los productos
					$Prestamos = "Prestamos Personales";
					$Compra = "Compra de Cartera";
					$Venta = "Venta de Tarjetas";
				
 if($ns==0){ // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            header("refresh:0.1 ;url=main.php");
}else if($ns==1 AND $producto==$Prestamos){
header("refresh:0.1 ;url=/Sepfin/prestamospersonales/gestion.php"); // si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}else if($ns==1 AND $producto==$Compra){
header("refresh:0.1 ;url=/Sepfin/compradecartera/gestion.php"); // si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal	
}else if($ns==1 AND $producto==$Venta){
header("refresh:0.1 ;url=/Sepfin/ventadetarjetas/gestion.php"); // si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
			}}else{
        echo"<script language='javascript'>alert('Error En el Usuario o Contraseña Intente de Nuevo'); </script>";
            header("refresh:0.1 ;url=agregarlogerroneo.php?usuario=$usuario");
    }}
            exit();
        }
			}
			}}}else
			{
			echo"<script language='javascript'>alert('Error, el Usuario ingresado no existe, Intente de Nuevo'); </script>";
            header("refresh:0.1 ;url=index.php");
			}
        ?>
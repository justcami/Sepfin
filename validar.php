        <?php

        $usuario = $_REQUEST['usuario']; 
        $pass = $_REQUEST['pass'];
                
        if(empty($usuario) || empty($pass)){
            header("Location:index.php");
            exit();
        }        
            else {	
			$mysqli = new mysqli('localhost', 'root', '','sistema');}
           $result = $mysqli-> query("SELECT * FROM usuarios WHERE usuario = '".$usuario."'");

            if($row = $result->fetch_object()){
                if($row -> contrasena == $pass){
                    session_start();
					$_SESSION['id']=$row-> id_usuario; // descargo id de la bd
                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["pass"] = $pass;
					$_SESSION['nuser'] = $row->Nivel_Usuario;
					$ns=$row->Nivel_Usuario; // descargo el niver de usuario
					
 if($ns==0){ // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            header("refresh:0.1 ;url=main.php");
}else{header("refresh:0.1 ;url=gestion.php"); // si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}
            }else{
        echo"<script language='javascript'>alert('Error En el Usuario o Contraseña Intente de Nuevo'); </script>";
            header("refresh:0.1 ;url=index.php");
    }


            exit();
        }
        ?>

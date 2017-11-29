<?php
include ('conexion3.php');

$usuario = $_REQUEST['usuario'];

$buscuenta = $con3 -> query ("SELECT * FROM usuarios WHERE usuario='$usuario'");
			$row_cnt = $buscuenta->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowcuentalogerroneo = $buscuenta->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowcuentalogerroneo = $rowcuentalogerroneo['cuentalogerroneo'];
					$rowlogerroneonew = $rowcuentalogerroneo + 1;	
					#etc.
$up = $con3 -> query ("UPDATE usuarios SET cuentalogerroneo='$rowlogerroneonew'
WHERE usuario='$usuario'");
			}}
if ($up) {

	echo
		"<script>
        location.href='index.php';
        </script>";
}else{
    
	echo "epa";
		"<script>
        alert('No se pudo aumentar el contador');
        location.href='index.php';
        </script>"; 
}
?>
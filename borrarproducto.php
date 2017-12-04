<?php 
include("seguridad.php");
include 'conexion.php';

$idproducto = $_REQUEST['idproducto'];

$tborrar = $con -> query ("SELECT * FROM productos WHERE idproducto='$idproducto'");
			$row_cnt = $tborrar->num_rows;
			if ($row_cnt > 0) 
			{
			//Recuperamos una fila de resultados como un array asociativo.
				while ($rowproducto = $tborrar->fetch_assoc()) 
				{ //Ya podemos trabajos con nuestros datos.        
					$rowproducto = $rowproducto['Producto'];
					$str = strtolower($rowproducto);
					$phrase = $str;
				$espacio = array(" ");
				$sin   = array("");
				$newphrase = str_replace($espacio, $sin, $phrase);
					$del2 = $con ->query("TRUNCATE TABLE $newphrase;");
				}
			}			

if ($del2) {
    echo "<script>
	   alert('Los registros se eliminaron correctamente');	
        location.href='/Sepfin/productos.php';
        </script>";
}else{
    echo "<script>
       alert('Los registros no pudieron ser eliminados');
        location.href='/Sepfin/productos.php';
        </script>"; 
}
?>
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
					//echo $str;
					$del2 = $con ->query("DROP TABLE $str;");
				}
			}	

$del = $con ->query("DELETE FROM productos WHERE idproducto='$idproducto' ");

if ($del) {
    echo "<script>
        location.href='/Sepfin/productos.php';
        </script>";
}else{
    echo "<script>
       alert('El registro no pudo ser eliminado');
        location.href='/Sepfin/productos.php';
        </script>"; 
}
?>
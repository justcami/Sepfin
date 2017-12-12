<?php
include("../seguridad4.php");
include ('../conexion3.php');
include ('../conexion.php');

$idproducto = $_REQUEST['ProductoID'];
$cedula = $_POST['Cedula'];
$nombre = $_POST['Nombre'];
$estado = $_POST['estado'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$tel3 = $_POST['tel3'];
$tel4 = $_POST['tel4'];
$tel5 = $_POST['tel5'];
$tel6 = $_POST['tel6'];
$tel7 = $_POST['tel7'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$motivo1 = $_POST['motivo1'];
$motivo2 = $_POST['motivo2'];
$motivo3 = $_POST['motivo3'];
$Tipificacion = $_POST['Tipificacion'];
$DetalleTipi = $_POST['detalletipi'];
$fecha = date("Y-m-d h:i:s A");
$base = $_POST['base'];
$Libre = "";

//Buscar la tabla asignada al usuario
	$busprod = $con3 -> query ("SELECT Producto FROM usuarios WHERE usuario='$user'");
	$row_cnt = $busprod->num_rows;
	if ($row_cnt > 0) 
	{
		//Recuperamos una fila de resultados como un array asociativo.
		while ($rowproducto = $busprod->fetch_assoc()) 
		{ //Ya podemos trabajos con nuestros datos.        

			$rowproducto = $rowproducto['Producto'];
			#etc.
			$phrase  = $rowproducto;
			$espacio = array(" ");
			$sin   = array("");
			$newphrase = str_replace($espacio, $sin, $phrase);
			$Venta2 = "VENTA";
			$vacio="";

/*			if($Tipificacion==$Venta2)
			{
				$up = $con -> query ("UPDATE $newphrase SET idproducto='$idproducto',cedula='$cedula',nombre='$nombre',estado='$estado',tel1='$tel1',tel2='$tel2',tel3='$tel3',tel4='$tel4',tel5='$tel5',tel6='$tel6',tel7='$tel7',direccion='$direccion',barrio='$barrio',localidad='$localidad',tipificacion='$Tipificacion',detalletipi='$DetalleTipi',fecha='$fecha',base='$base',EstadoRegistro='$Libre',Usuario='$nuusuario' WHERE idproducto='$idproducto'");

				$busidagen = $con -> query ("SELECT idagendamiento FROM agendamientos WHERE cedula='$cedula'");
				$row_cnt = $busidagen->num_rows;

				if ($row_cnt >= 1) 
				{
					//Recuperamos una fila de resultados como un array asociativo.
					while ($rowidagendamiento = $busidagen->fetch_assoc()) 
					{
						//Ya podemos trabajos con nuestros datos.        
						$rowidagendamiento = $rowidagendamiento['idagendamiento'];
						#etc.
						$up2 = $con -> query ("UPDATE agendamientos SET cedula='$cedula', nombre='$nombre', estado='$estado', direccion='$direccion', barrio='$barrio', localidad='$localidad', tel1='$tel1', tel2='$tel2', tel3='$tel3', motivo1='$motivo1', motivo2='$motivo2', motivo3='$motivo3', fecha='$fecha', base='$base', EstadoRegistro='$Libre', Usuario='$nuusuario', producto='$phrase' WHERE idagendamiento='$rowidagendamiento'");	
					}
				}else
				{
					$up2 = $con -> query ("INSERT INTO agendamientos (idagendamiento, cedula, nombre, estado, direccion, barrio, localidad, tel1, tel2, tel3, fecha, base, EstadoRegistro, Usuario, producto) VALUES ('','$cedula','$nombre','$estado','$direccion','$barrio','$localidad','$tel1','$tel2','$tel3','$fecha','$base','$Libre','$nuusuario','$phrase')");
				}
				
				$busidagen = $con -> query ("SELECT idagendamiento FROM agendamientos WHERE cedula='$cedula'");
				$row_cnt = $busidagen->num_rows;
				if ($row_cnt >= 1) 
				{
					//Recuperamos una fila de resultados como un array asociativo.
					while ($rowidagendamiento = $busidagen->fetch_assoc()) 
					{ 
						//Ya podemos trabajos con nuestros datos.        
						$rowidagendamiento = $rowidagendamiento['idagendamiento'];
						#etc.
						if (($up) && ($up2))
						{
							echo
							"<script>
							alert('Registro Actualizado Exitosamente, debe agendar');
					        location.href='/Sepfin/ventadetarjetas/editagendamiento.php?idagendamiento=$rowidagendamiento';
					        </script>";
						}else
						{
							echo
								"<script>
								alert('Epa!! Algo Paso');
						        location.href='/Sepfin/ventadetarjetas/gestion.php';
						        </script>";	
						}
					}
				}
			}else
			{
*/
				$up = $con -> query ("UPDATE $newphrase SET idproducto='$idproducto',cedula='$cedula',nombre='$nombre',estado='$estado',tel1='$tel1',tel2='$tel2',tel3='$tel3',tel4='$tel4',tel5='$tel5',tel6='$tel6',tel7='$tel7',direccion='$direccion',barrio='$barrio',localidad='$localidad',tipificacion='$Tipificacion',detalletipi='$DetalleTipi',fecha='$fecha',base='$base',EstadoRegistro='$Libre',Usuario='$nuusuario' WHERE idproducto='$idproducto'");
				if ($up) 
				{
					echo
						"<script>
						alert('Registro Actualizado Exitosamente');
				        location.href='/Sepfin/ventadetarjetas/gestion.php';
				        </script>";	
				}else
				{
					echo
						"<script>
						alert('Epa!! Algo Paso');
				        location.href='/Sepfin/ventadetarjetas/gestion.php';
				        </script>";	
				} 
			
		}
	}

?>
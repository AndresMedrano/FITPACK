<?php

	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idjuego'];
	$sql="CALL LISTA_CLIENTES_TODOS($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'cedula'=>$ver[0],
              'nombres'=>$ver[1],
              'celular'=>$ver[2],
              'correo'=>$ver[3]
							'direccion'=>$ver[3]
					);
	echo json_encode($datos);
 ?>

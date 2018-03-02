<?php
	include('session.php');
 	require_once "datatable/php/conexion.php";
  	$conexion=conexion();
  	error_reporting(0);
  	$estatus=1;
  	$fecha = date("Y/m/d");

	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 $buscarMiembro = "SELECT * FROM miembros
	 WHERE MIEMBRO_CI = '$_POST[txtcedula]' ";
	 $result = $conexion->query($buscarMiembro);
	 $count = mysqli_num_rows($result);

	 if ($count == 1) {
	 	echo "<script languaje='javascript'>alert('Este número de Cédula ya se encuentra registrado'); location.href = 'registro.php';</script>";
	 }
	 else{
///Insertamos información en la Tabla de Miembros
	 $query = "INSERT INTO miembros (MIEMBRO_NOMBRE,MIEMBRO_APELLIDO,MIEMBRO_NICK,MIEMBRO_CI,MIEMBRO_NACIMIENTO,MIEMBRO_SEXO,MIEMBRO_CORREO,MIEMBRO_TELEFONO_FIJO,MIEMBRO_TELEFONO_CELULAR,MIEMBRO_CIUDAD,MIEMBRO_DIRECCION,fecha_registro) VALUES ('$_POST[txtnombre]','$_POST[txtapellidos]','$_POST[txtnick]', '$_POST[txtcedula]', '$_POST[txtfechan]', '$_POST[sexo]', '$_POST[txtcorreo]', '$_POST[txttelefonofijo]', '$_POST[txttelefonocelular]', '$_POST[txtciudad]', '$_POST[txtdireccion]', '$fecha')";
// Insertamos información en la tabla de pagos
	 $query2 = "INSERT INTO pagos (no_pagos,numero_transferencia,valor_pagos,total_pagos,meses_pagos,status_pagos,fecha_pagos) VALUES ('$_POST[txtcedula]','$_POST[txttransferencia]','$_POST[txtmonto]','$_POST[cuotas]','$_POST[cuotas]','$estatus','$fecha')";

	 if ($conexion->query($query) and $conexion->query($query2) === TRUE) {
	     echo "<script languaje='javascript'>alert('Cliente Registrado Exitosamente'); location.href = 'registro.php';</script>";
	 }
	 else {
	 echo "<script languaje='javascript'>alert('No se pudo registrar al cliente');</script>" . $query . "<br>" . $conexion->error;
	   }
	 }
	 mysqli_close($conexion);
	?>
<?php
	include('session.php');
 	require_once "datatable/php/conexion.php";
  	$conexion=conexion();
  	error_reporting(0);

	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 $buscarMiembro = "SELECT * FROM miembros
	 WHERE MIEMBRO_CI = '$_POST[txtcedula]' ";
	 $result = $conexion->query($buscarMiembro);
	 $count = mysqli_num_rows($result);

	 if ($count == 1) {
	  header('Location: registro.php');
	 }
	 else{

	 $query = "INSERT INTO miembros (MIEMBRO_NOMBRE,MIEMBRO_APELLIDO,MIEMBRO_NICK,MIEMBRO_CI,MIEMBRO_NACIMIENTO,MIEMBRO_SEXO,MIEMBRO_CORREO,MIEMBRO_TELEFONO_FIJO,MIEMBRO_TELEFONO_CELULAR,MIEMBRO_CIUDAD,MIEMBRO_DIRECCION) VALUES ('$_POST[txtnombre]','$_POST[txtapellidos]','$_POST[txtnick]', '$_POST[txtcedula]', '$_POST[txtfechan]', '$_POST[sexo]', '$_POST[txtcorreo]', '$_POST[txttelefonofijo]', '$_POST[txttelefonocelular]', '$_POST[txtciudad]', '$_POST[txtdireccion]')";
	 
	 if ($conexion->query($query) === TRUE) {
	     echo "<script languaje='javascript'>alert('Cliente Registrado Exitosamente'); location.href = 'registro.php';</script>";
	 }
	 else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
	   }
	 }
	 mysqli_close($conexion);
	?>
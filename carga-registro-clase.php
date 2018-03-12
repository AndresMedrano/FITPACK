<?php
	include('session.php');
 	require_once "datatable/php/conexion.php";
  	$conexion=conexion();
  	error_reporting(0);
//Variable para ingreso de Estatus de Pago en Tabla Pagos
  	$estatus=1;
//Variable para agregar la fecha de registro y de pago en las tablas
  	$fecha = date("Y/m/d");

// Valido que la Conexión se encuentre arriba
	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
// Validando que ningun campo se encuentre en blanco
  	if(isset($_POST['gimnasio']) && ($_POST['txtclase']) && ($_POST['txtdesde']) && ($_POST['txthasta']) && ($_POST['txtfecha']));
///Insertamos información en la Tabla de Clases Horarios
	 $query = "INSERT INTO clases_horarios (gimnasio,horario,clase,fecha) VALUES ('$_POST[gimnasio]','De $_POST[txtdesde] a $_POST[txthasta]', '$_POST[txtclase]', '$_POST[txtfecha]')";
	 if ($conexion->query($query) === TRUE) {
	     echo "<script languaje='javascript'>alert('Clase Registrada Exitosamente'); location.href = 'clases.php';</script>";
	 }
	 else {
	 echo "<script languaje='javascript'>alert('No se pudo registrar al cliente');</script>" . $query . "<br>" . $conexion->error;
	   }
	 mysqli_close($conexion);
	?>
<?php
  include('session.php');
  require_once "datatable/php/conexion.php";
    $conexion=conexion();
    error_reporting(0);
//Variable para agregar la fecha de registro y de pago en las tablas
    $fecha = date("Y/m/d");
// Valido que la Conexión se encuentre arriba
   if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }
// Validando que ningun campo se encuentre en blanco
    if(isset($_POST['txtnombre']) && ($_POST['txtapellidos']) && ($_POST['txtnick']) && ($_POST['txtcedula']) && ($_POST['txtnick']) && ($_POST['txtcorreo']) && ($_POST['txttelefonofijo']) && ($_POST['txttelefonocelular']) && ($_POST['txtlocal']) && ($_POST['txtdireccion']) && ($_POST['txtdescripcion']) && ($_POST['txtentrenamientos']) && ($_POST['txtweb']) && ($_POST['txtfacebook']) && ($_POST['txtinstagram']) && ($_POST['txttwitter']));
//Subo Archivo al Servidor
  $archivo = $_FILES["logo"]["tmp_name"];
  $nombre_archivo = $_FILES["logo"]["name"];
  $destino = "imagenes_subidas/".$nombre_archivo;
  move_uploaded_file($archivo, $destino);
//Buscar si el aliado que se intenta ingresar ya Existe 
   $buscarAliado = "SELECT * FROM aliados WHERE ALIADO_CORREO = '$_POST[txtcorreo]'";
   $result = $conexion->query($buscarAliado);
   $count = mysqli_num_rows($result);

   if ($count == 1) {
    echo "<script languaje='javascript'>alert('Este aliado ya se encuentra registrado'); location.href = 'registro.php';</script>";
   }
   else{
///Insertamos información en la Tabla de Miembros
   $query = "INSERT INTO aliados (ALIADO_PROPIETARIO_NOMBRE,ALIADO_PROPIETARIO_APELLIDO,ALIADO_LOCAL_NOMBRE,ALIADO_DIRECCION,ALIADO_CORREO,ALIADO_TELEFONO_FIJO,ALIADO_TELEFONO_CELULAR,ALIADO_DESCRIPCION,ALIADO_ENTRENAMIENTOS,ALIADO_WEB,ALIADO_REDES_SOCIALES,ALIADO_LOGO,ALIADO_NICK,ALIADO_FECHA_REGISTRO) VALUES ('$_POST[txtnombre]','$_POST[txtapellidos]','$_POST[txtlocal]', '$_POST[txtdireccion]', '$_POST[txtcorreo]', '$_POST[txttelefonofijo]', '$_POST[txttelefonocelular]', '$_POST[txtdescripcion]', '$_POST[txtentrenamientos]', '$_POST[txtweb]','$_POST[txtfacebook]$_POST[txttwitter]$_POST[txtinstagram]','$nombre_archivo','$_POST[txtnick]','$fecha')";

   if ($conexion->query($query) === TRUE) {
       echo "<script languaje='javascript'>alert('Aliado Registrado Exitosamente'); location.href = 'registro-aliados.php';</script>";
   }
   else {
   echo "<script languaje='javascript'>alert('No se pudo registrar al cliente');</script>" . $query . "<br>" . $conexion->error;
     }
   }
   mysqli_close($conexion);
  ?>
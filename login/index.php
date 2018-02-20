<?php @session_start();
include '../conexion/dbconfigadm.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $con->real_escape_string(htmlentities($_POST['usuario']));
  $pass = $con->real_escape_string(htmlentities($_POST['contrasena']));
}else {
  
}

?>

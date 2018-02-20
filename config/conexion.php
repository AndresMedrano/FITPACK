<?php
	/*-------------------------
	Autor: Andrés Medrano
	Web: andresmedrano.com
	Mail: andres.medrano@softech.com.ec
	---------------------------*/
	# conectare la base de datos
  // function conexion()
  // {
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
  // }

?>



<?php

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'anhhkdmx_fitpack',
										'Fitpack20!8#.',
										'anhhkdmx_fitpack');
			return $conexion;
		}
	}


 ?>

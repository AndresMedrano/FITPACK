<?php
include "../config/conexion.php";
/*Fin Conexión Base de Datos*/

// almacenamiento de la matriz global request (es decir, get / post) a una variable

$requestData = $_REQUEST;

$columns = array(
  0 => 'nombres'
  1 => 'telefono'
  2 => 'email'
  3 => 'direccion'
  4 => 'fechainicial'
  5 => 'fechafinal'
);

// obtener registros de números totales sin ninguna búsqueda

$sql = "SELECT nombres, telefono, email, direccion, fechainicial, fechafinal";
$sql.= "FROM miembros";
$query = mysqli_query($conexion, $sql) or die("ajax-grid-data.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData; // cuando no hay un parámetro de búsqueda, el número total de filas = número total de filas filtradas.

if (!empty($requestData['search']['value'])) {
// si hay un parámetro de búsqueda
  $sql = "SELECT nombres, telefono, email, direccion, fechainicial, fechafinal";
  $sql.= "FROM miembros"
} else {
  # code...
}

?>

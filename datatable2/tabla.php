
<?php

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT MIEMBRO_CI                                                AS CEDULA,
       CONCAT(UPPER(MIEMBRO_NOMBRE), ' ',UPPER(MIEMBRO_APELLIDO))AS NOMBRES,
       MIEMBRO_TELEFONO_CELULAR                                  AS CELULAR,
       MIEMBRO_CORREO                                            AS CORREO,
       MIEMBRO_DIRECCION                                         AS DIRECCION
       FROM `miembros` WHERE MIEMBRO_NOMBRE IS NOT NULL;";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>CEDULA</td>
				<td>NOMBRES</td>
				<td>CELULAR</td>
				<td>CORREO</td>
				<td>DIRECCION</td>
				<td>ACCIONES</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>CEDULA</td>
				<td>NOMBRES</td>
				<td>CELULAR</td>
				<td>CORREO</td>
				<td>DIRECCION</td>
				<td>ACCIONES</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<!-- <td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td> -->
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>

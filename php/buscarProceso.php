<?php
require_once('../cp/conexion.php');

$datos = $_POST['datos'];

$sql = "SELECT * FROM proceso WHERE num_proceso LIKE '%$datos%' || cc_demandante LIKE '%$datos%' || cc_demandado LIKE '%$datos%' || demandante LIKE '%$datos%' || demandado LIKE '%$datos%'";
$consulta = $conexion->query($sql);








?>


<table id="myTable" class="table">
		 	<thead>
		 		<th>#PROCESO</th>
		 		<th>CIUDAD</th>
		 		<th>NOMBRE EMPRESA</th>
		 		<th>DEMANDANTE</th>
		 		<th>DEMANDADO</th>
		 		<th>PRECIO</th>
		 		<th>ADJUNTAR</th>
		 	</thead>
		 	<tbody>
		 		<?php while ($datos2 = $consulta->fetch_object()) { if ($datos2 == NULL){ ?>

		 		<tr>
					<td>no se ha encontrado ningun registro</td>
				</tr>

				<?php }else{ ?>




		 			<tr>
		 				<td><?= $datos2->num_proceso; ?></td>
		 				<td><?= $datos2->ciudad; ?></td>
		 				<td><?= $datos2->nom_empresa; ?></td>
		 				<td><?= $datos2->demandante.' ('.$datos2->cc_demandante.').' ; ?></td>
		 				<td><?= $datos2->demandado.' ('.$datos2->cc_demandado.').' ; ?></td>
		 				<td><?= $datos2->valor; ?></td>
		 				<td><a  class="btn btn-success" href="archivos.php?id=<?= $datos2->id_proceso; ?>">Adjuntar</a></td>
		 			</tr>
		 		<?php }} ?>
		 	</tbody>
		 </table>



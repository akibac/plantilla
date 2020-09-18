<table class="table table-flush" id="table_U">
	<thead class="thead-light">
	  <tr>
	    <th scope="col">Nombre</th>
	    <th scope="col">Usuario</th>
	    <th scope="col">Rol</th>
	    <th scope="col">Acciónes</th>
	  </tr>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
			<tr>
				<th scope="row">
			    	<?=$value->name?>
			    </th>
			    <td>
			    	<?=$value->user?>
			    </td>
			    <td>
			    	<?=$value->description?>
			    </td>
			    <td>
			    	<button class="btn btn-icon btn-success" type="button" title="Editar" onclick="Modal_Update(<?=$value->id_users?>)">
						<span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
					</button>
					<button class="btn btn-icon btn-danger" type="button" title="Eliminar" onclick="Delete(<?=$value->id_users?>)">
						<span class="btn-inner--icon"><i class="ni ni-basket"></i></span>
					</button>
			    </td>
			</tr>
		<?php } ?>
	</tbody>
</table>
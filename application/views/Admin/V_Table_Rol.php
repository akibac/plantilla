<table class="table table-flush" id="table_U">
	<thead class="thead-light">
	  <tr>
	    <th scope="col">ID</th>
	    <th scope="col">Descripción</th>
	    <th scope="col">Estado</th>
	    <th scope="col">Acciones</th>
	  </tr>
	</thead>
	<tbody>
		
		<?php foreach ($roles as $key => $value) { ?>
			<tr>
				<th scope="row">
			    	<?=$value->id_roles?>
			    </th>
			    <td>
			    	<?=$value->description?>
			    </td>
			    <td>
			    	<?=$value->status_name?>
			    </td>
			    <td>
			    	<button class="btn btn-icon btn-success" type="button" title="Editar" onclick="Modal_Update_Rol(<?=$value->id_roles?>)">
						<span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
					</button>
					<button class="btn btn-icon btn-danger" type="button" title="Eliminar" onclick="DeleteRol(<?=$value->id_roles?>)">
						<span class="btn-inner--icon"><i class="ni ni-basket"></i></span>
					</button>
			    </td>
			</tr>
		<?php } ?>
	</tbody>
</table>
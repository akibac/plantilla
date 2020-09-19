<table class="table table-flush" id="table_menu">
	<thead class="thead-light">
	  <tr>
	    <th scope="col">Título</th>
	    <th scope="col">URL</th>
	    <th scope="col">Tipo</th>
	    <th scope="col">Ícono</th>
	    <th scope="col">Acciónes</th>
	  </tr>
	</thead>
	<tbody>

		<?php foreach ($data as $key => $value) { ?>
			<tr>
				<th scope="row">
			    	<?=$value->name_child?>
			    </th>
			    <td>
			    	<?=$value->url_child?>
			    </td>
			    <td>
			    	<?=$value->description_child?>
			    </td>
			    <td>
			    	<i class="ni ni-<?=$value->icon_child?> text-success mr-3"></i>
			    </td>
			    <td>
			    	<button class="btn btn-icon btn-success" type="button" title="Editar" onclick="Modal_Update(<?=$value->id_menu_child?>)">
						<span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
					</button>
					<button class="btn btn-icon btn-danger" type="button" title="Eliminar" onclick="Delete(<?=$value->id_menu_child?>,<?=$value->type_child?>)">
						<span class="btn-inner--icon"><i class="ni ni-basket"></i></span>
					</button>
			    </td>
			</tr>
		<?php } ?>
		
	</tbody>
</table>
<table id="tabla_prueba" class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>Id Supplies</th>
            <th>Nombre</th>
            <th>Peso</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_supplies as $key => $value) { ?>
            <tr>
                <td><button class="btn btn-primary" onclick="search(<?=?>)"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></td>
                <td><?= $value->id_supplies?></td>
                <td><?= $value->name?></td>
                <td><?= $value->weight_per_supplies?></td>
            </tr>
        <?php } ?>
        
    </tbody>
</table>
<?php foreach ($data as $key => $value) { ?>
<div class="col-6">
	<img class="card-img-top" src="<?=base_url()?>/dist/profile/<?=$value->id_users?>/<?=$value->img_profile?>" alt="Card image cap">
</div>
<div class="col-6">
	<div class="form-group">
			<h2 class="card-title">Nombre</h2>
			<p><?=$value->name?></p>
			<h2 class="card-title">Usuario</h2>
			<p><?=$value->user?></p>
			<h2 class="card-title">Rol de usuario</h2>
			<p><?=$value->description?></p>
			<input type="hidden" id="rol" value="<?=$value->rol?>">
			<a href="#" class="btn btn-primary" onclick="Modal_Update_Detail(<?= $value->id_users ?>)">Editar</a>
        	<!-- <input type="text" class="form-control" name=""> -->
    </div>
</div>
<?php } ?>
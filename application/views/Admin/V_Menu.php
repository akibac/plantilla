<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Admininistración Plataforma</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Administración Menú</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example-modal-lg">Nuevo</a>
          <a href="#" class="btn btn-sm btn-neutral" onclick="modal_logo()">Nuevo Logo</a>
        </div>
      </div>
      <!-- Card stats -->
     
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Lista de Registros</h3>
            </div>
            <!-- <div class="col text-right">
              <a href="#!" class="btn btn-sm btn-primary">See all</a>
            </div> -->
          </div>
        </div>
        <div class="table-responsive" id="content">
			<?=$table?>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
          &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Título</label>
		        <input type="text" class="form-control" id="title" placeholder="Título">
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>URL</label>
		        <input type="text" placeholder="Folder/C_Controller" class="form-control" id="url" />
		      </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Tipo</label>
		      	<select class="form-control" id="slctype" onchange="type_menu()">
		      		<option value="">//</option>
		      		<?php foreach ($type_m as $key => $value) { ?>
		      			<option value="<?= $value->id_type_menu ?>"><?= $value->description ?> </option>
		      		<?php } ?>
		      	</select>
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Padre</label>
		        <select class="form-control" id="ft">
		      		<option value="">//</option>
		      	</select>
		      </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Icono</label>
		      	<select class="form-control" id="icn" onchange="iconChange()">
		      		<option value="">//</option>
		      		<?php foreach ($icons as $key => $value) { ?>
		      			<option value="<?= $value->id_icon ?>"><?= $value->name ?></option>
		      		<?php } ?>
		      	</select>
		      </div>
		    </div>
		    <div class="col-md-6">
		    	<label>Previa</label>
		    	<div class="text-center">
				<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
					<i class="ni ni-air-baloon" id="icon_flex"></i>
				</div>
				</div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label>Roles Autorizados</label>
				<select class="form-control roles" id="pga" data-toggle="select" multiple data-placeholder="Select multiple options">
			        <?php foreach ($roles as $key => $value) { ?>
			        	<option value="<?= $value->id_roles ?>"><?=$value->description?></option>
			        <?php } ?>
    			</select>

			</div>
		</div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="Save()">Guardar</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal_edit">
  <div class="modal-dialog modal-lg">
   	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Título</label>
		        <input type="text" class="form-control" id="edit-title" placeholder="Título">
		        <input type="hidden" id="id_menu">
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>URL</label>
		        <input type="text" placeholder="Folder/C_Controller" class="form-control" id="edit-url" />
		      </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Tipo</label>
		      	<select class="form-control" id="edit-slctype" onchange="type_menu2()">
		      		<option value="">//</option>
		      		<?php foreach ($type_m as $key => $value) { ?>
		      			<option value="<?= $value->id_type_menu ?>"><?= $value->description ?> </option>
		      		<?php } ?>
		      	</select>
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Padre</label>
		        <select class="form-control" id="edit-ft">
		      		<option value="">//</option>
		      	</select>
		      </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-md-6">
		      <div class="form-group">
		      	<label>Icono</label>
		      	<select class="form-control" id="edit-icn" onchange="iconChange2()">
		      		<option value="">//</option>
		      		<?php foreach ($icons as $key => $value) { ?>
		      			<option value="<?= $value->id_icon ?>"><?= $value->name ?></option>
		      		<?php } ?>
		      	</select>
		      </div>
		    </div>
		    <div class="col-md-6">
		    	<label>Previa</label>
		    	<div class="text-center">
				<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
					<i class="ni ni-air-baloon" id="edit-icon_flex"></i>
				</div>
				</div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label>Roles Autorizados</label>
				<select class="form-control roles" id="edit-pga" data-toggle="select" multiple data-placeholder="Select multiple options">
			        <?php foreach ($roles as $key => $value) { ?>
			        	<option value="<?= $value->id_roles ?>"><?=$value->description?></option>
			        <?php } ?>
    			</select>

			</div>
		</div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="Update()">Guardar</button>
      </div>

    </div>

  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal_logo">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="POST" enctype="multipart/form-data" id="myform">
			<div class="row">
				<div class="col-md-12">
					<label>Foto</label>
					<div class="custom-file">
				        <input type="file" class="custom-file-input" id="edit-logo" name="edit-logo" lang="en" accept="image/png">
				        <label class="custom-file-label" for="edit-logo">Seleccionar Imagen</label>
				    </div>
				</div>
			</div>
		</form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="Update_Logo()">Guardar</button>
      </div>

    </div>
  </div>
</div>
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
              <li class="breadcrumb-item active" aria-current="page">Detalle Usuario</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
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
              <h3 class="mb-0">Detalle de <?=$this->session->NameUser?></h3>
            </div>
            <!-- <div class="col text-right">
              <a href="#!" class="btn btn-sm btn-primary">See all</a>
            </div> -->
          </div>
        </div>
        <div class="card-body">
        	<div class="row" id="content_detail">
	        	<?=$content?>
	        </div>
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

<div class="modal fade bd-example-modal-lg" id="modal_update">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="POST" enctype="multipart/form-data" id="myform">
      		<div class="row">
			    <div class="col-md-6">
			      <div class="form-group">
			      	<label>Nombre</label>
			        <input type="text" class="form-control" id="edit-name" placeholder="Nombre">
			        <input type="hidden" id="id_user">
			      </div>
			    </div>
			    <div class="col-md-6">
			      <div class="form-group">
			      	<label>Usuario</label>
			        <input type="text" placeholder="Usuario" class="form-control" id="edit-user"/>
			      </div>
			    </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>Foto</label>
					<div class="custom-file">
				        <input type="file" class="custom-file-input" id="customFileLang" name="customFileLang" lang="en" accept="image/*">
				        <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
				    </div>
				</div>
			</div>
      	</form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="Update2()">Guardar</button>
      </div>

    </div>
  </div>
</div>
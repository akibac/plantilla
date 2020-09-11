function Save(){
	if($("#passConfirm").val() == $("#pass").val()){
		var name = $("#name").val();
		var user = $("#user").val();
		var pass = $("#pass").val();
		var rol = $("#slcrol").val();
		if (name == "" || user == "" || pass == "" || rol == "") {
			swal({
	            type: 'error',
	            title: 'Atención',
	            text: 'Ingrese todos los campos'
	        });
		}else{
			$.ajax({
		        url:  "C_Users/Save",
		        type: 'POST',
		        data: {name:name,user:user,pass:pass,rol:rol},
		        success: function(data){
		            var datos = JSON.parse(data);
		            swal({
	                    type: 'success',
	                    title: 'OK',
	                    text: 'Registro Agregado'
	                });
		            content();
		            $("#modal_add").modal("hide");
		        }
		    });
		}
	}else{
		swal({
            type: 'error',
            title: 'Atención',
            text: 'No coinciden las contraseñas'
        });
	}
}

function Modal_Update(id_user){
	$.ajax({
        url:  "C_Users/data_update",
        type: 'POST',
        data: {id_user:id_user},
        success: function(data){
            var datos = JSON.parse(data);
            datos.forEach(function(element){
            	$("#edit-name").val(element.name);
            	$("#edit-user").val(element.user);
            	$("#id_user").val(id_user);
            	$("#modal_update").modal("show");
            });
            
        }
    });
}

function Update(){
	var name = $("#edit-name").val();
	var user = $("#edit-user").val();
	var rol = $("#edit-slcrol").val();
	var id_user = $("#id_user").val();
	if (name == "" || user == "" || pass == "" || rol == "") {
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Ingrese todos los campos'
        });
	}else{
		$.ajax({
	        url:  "C_Users/Update",
	        type: 'POST',
	        data: {name:name,user:user,rol:rol,id_user:id_user},
	        success: function(data){
	            var datos = JSON.parse(data);
	            swal({
                    type: 'success',
                    title: 'OK',
                    text: 'Registro Actualizado'
                });
	            content();
	            $("#modal_update").modal("hide");
	        }
	    });
	}
}

function Delete(id_user){
	swal({
        title: 'Desea eliminar este usuario?',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar!'
    }).then((result) => {
        if (result) {
            $.ajax({
		        url:  "C_Users/Delete",
		        type: 'POST',
		        data: {id_user:id_user},
		        success: function(data){
		            var datos = JSON.parse(data);
		            swal({
	                    type: 'success',
	                    title: 'OK',
	                    text: 'Registro Eliminado'
	                });
		            content();
		        }
		    });
        }
    }).catch(swal.noop)
}

function content(){
	$.ajax({
        url:  "C_Users/Content",
        type: 'POST',
        data: {},
        success: function(data){
            var datos = JSON.parse(data);
            $("#content").html(datos.table);
        }
    });
}
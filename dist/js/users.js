$(document).ready(function(){
	$('#table_U').DataTable();
});
function Save(){
	if($("#passConfirm").val() == $("#pass").val()){
		var name = $("#name").val();
		var user = $("#user").val();
		var pass = $("#pass").val();
		var rol = $("#slcrol").val();
		var id = "file_img";
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
	                var imgv = $("#file_img").val();
		            if (imgv != "") {
	               		img_Update(id,datos);
	               	}
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
            	$("#edit-pass").val(element.password);
            	$("#edit-passConfirm").val(element.password);
            	$("#edit-slcrol option[value='"+element.rol+"']").attr("selected", true);
            	$("#id_user").val(id_user);
            	$("#modal_update").modal("show");
            });
            
        }
    });
}

function Modal_Update_Detail(id_user){
	$.ajax({
        url:  "data_update",
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
	var pass = $("#edit-pass").val();
	var passConfirm = $("#edit-passConfirm").val();

	var id = "edit-customFileLang"; //id del input file
	if (name == "" || user == "" || pass == "" || rol == "") {
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Ingrese todos los campos'
        });
	}else{
		if (pass != passConfirm) {
			swal({
	            type: 'error',
	            title: 'Atención',
	            text: 'Las contraseñas no son iguales'
	        });
		}else{
			$.ajax({
		        url:  "C_Users/Update",
		        type: 'POST',
		        data: {name:name,user:user,rol:rol,id_user:id_user,pass:pass},
		        success: function(data){
		            var datos = JSON.parse(data);
		            swal({
	                    type: 'success',
	                    title: 'OK',
	                    text: 'Registro Actualizado'
	                });
	                var file = $("#edit-customFileLang").val();
	               	if (file != "") {
	               		img_Update(id,id_user);
	               	}
		            content();
		            $("#modal_update").modal("hide");
		        }
		    });
		}
	}
}

function Update2(){
	var name = $("#edit-name").val();
	var user = $("#edit-user").val();
	var id_user = $("#id_user").val();
	var rol = $("#rol").val();

	var id = "customFileLang"; //id del input file
	if (name == "" || user == "") {
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Ingrese todos los campos'
        });
	}else{
		$.ajax({
	        url:  url+"Admin/C_Users/Update",
	        type: 'POST',
	        data: {name:name,user:user,id_user:id_user,rol:rol},
	        success: function(data){
	            //var datos = JSON.parse(data);
	            swal({
                    type: 'success',
                    title: 'OK',
                    text: 'Registro Actualizado'
                });
                var file = $("#customFileLang").val();
               	if (file != "") {
               		img_Update(id,id_user);
               	}
	            content_edit();
	            $("#modal_update").modal("hide");
	            location.reload();
	        }
	    });
	}
}

function img_Update(id,id_user){
	var fd = new FormData();
    var files = $('#'+id)[0].files[0];
    fd.append(id,files);
    fd.append("name",id);
    fd.append("id_user",id_user);
    fd.append("img",files.name);
	$.ajax({
        url:  url+"Admin/C_Users/Upload_img",
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(data){
            
        }
    });
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
        url:  url+"Admin/C_Users/Content",
        type: 'POST',
        data: {},
        success: function(data){
            var datos = JSON.parse(data);
            $("#content").html(datos.table);
            $('#table_U').DataTable();
        }
    });
}

function content_edit(){
	$.ajax({
        url:  url+"Admin/C_Users/Content_edit",
        type: 'POST',
        data: {},
        success: function(data){
            var datos = JSON.parse(data);
            $("#content_detail").html(datos.content);
        }
    });
}

function change_password(){
	var pass = $("#psw").val();
	var ConfirmPass = $("#pswC").val();
	if (pass != ConfirmPass){
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Contraseña no es igual'
        });
	}else{
		if (pass == "" || ConfirmPass == ""){
			swal({
	            type: 'error',
	            title: 'Atención',
	            text: 'Ingrese todos los campos'
	        });
		}else{
			$.ajax({
		        url:  url+"Admin/C_Users/change_password",
		        type: 'POST',
		        data: {pass:pass},
		        success: function(data){
		            swal({
			            type: 'success',
			            title: 'Contraseña actualizada',
			            text: ''
			        });
		        }
		    });
		}
	}
	
}

function content_rol(){
	$.ajax({
        url:  url+"Admin/C_Users/Content_rol",
        type: 'POST',
        data: {},
        success: function(data){
            var datos = JSON.parse(data);
            $("#content").html(datos.table);
            $('#table_U').DataTable();
        }
    });
}

function Save_Rol(){
	var rol = $("#rol").val();
	var state_id = $("#state").val();
	console.log(state);
	$.ajax({
        url:  url+"Admin/C_Users/Save_Rol",
        type: 'POST',
        data: {rol:rol,state_id:state_id},
        success: function(data){
            swal({
	            type: 'success',
	            title: 'Rol Agregado',
	            text: ''
	        });
	        $("#modal_add").modal("hide");
	        content_rol();
        }
    });
}

function Modal_Update_Rol(id_rol){
	$.ajax({
        url:  url+"Admin/C_Users/data_update_rol",
        type: 'POST',
        data: {id_rol:id_rol},
        success: function(data){
            var datos = JSON.parse(data);
            datos.forEach(function(element){
            	$("#edit-rol").val(element.description);
            	$("#id_rol").val(id_rol);
            	$("#edit-state option[value='"+element.status+"']").attr("selected", true);
            	$("#modal_edit").modal("show");
            });
            
        }
    });
}

function Update_Rol(){
	var id_rol = $("#id_rol").val();
	var rol = $("#edit-rol").val();
	var state_id = $("#edit-state").val();
	$.ajax({
        url:  url+"Admin/C_Users/Update_Rol",
        type: 'POST',
        data: {id_rol:id_rol,rol:rol,state_id:state_id},
        success: function(data){
            var datos = JSON.parse(data);
            $("#modal_edit").modal("hide");
            content_rol();
            swal({
	            type: 'success',
	            title: 'Rol Actualizado',
	            text: ''
	        });
        }
    });
}

function DeleteRol(id_rol){
	swal({
        title: 'Desea eliminar este rol?',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar!'
    }).then((result) => {
        if (result) {
            $.ajax({
		        url:  url+"Admin/C_Users/DeleteRol",
		        type: 'POST',
		        data: {id_rol:id_rol},
		        success: function(data){
		            var datos = JSON.parse(data);
		            swal({
	                    type: 'success',
	                    title: 'OK',
	                    text: 'Rol Eliminado'
	                });
		            content_rol();
		        }
		    });
        }
    }).catch(swal.noop)
}
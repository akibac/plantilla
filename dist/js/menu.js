$(document).ready(function(){
	$('#pga').select2();
	$('#edit-pga').select2();
	$('#table_menu').DataTable();
});

function Save(){
	var title = $("#title").val();
	var url = $("#url").val();
	var type = $("#slctype").val();
	var father = $("#ft").val();
	var icon = $("#icn").val();
	var roles = $("#pga").val();
	if (title == "" || url == "" || type == "" || father == "" || icon == "") {
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Ingrese todos los campos'
        });
	}else{
		$.ajax({
	        url:  "C_Menu/Save",
	        type: 'POST',
	        data: {title:title,url:url,type:type,father:father,icon,icon,roles:roles},
	        success: function(data){
	            var datos = JSON.parse(data);
	            swal({
                    type: 'success',
                    title: 'OK',
                    text: 'Registro Guardado'
                });
                Content();
                $("#modal_add").modal("hide");
	        }
	    });
	}
	
}

function type_menu(){
	$('#ft').empty();
	$('#ft').append(`<option value="0"> // </option>`);
	var type = $("#slctype").val();
	if (type == "2" || type == "4") {
		$.ajax({
	        url:  "C_Menu/get_menu",
	        type: 'POST',
	        data: {type:type},
	        success: function(data){
	            var datos = JSON.parse(data);
	            datos.forEach(function(element){
	            	$('#ft').append('<option value="'+element.id_menu+'"> '+element.title+' </option>'); 
	            });
	        }
	    });
	}else{
		$('#ft').append(`<option value="0"> Raiz </option>`); 
	}
}

function type_menu2(){
	$('#edit-ft').empty();
	$('#edit-ft').append(`<option value="0"> // </option>`);
	var type = $("#edit-slctype").val();
	if (type == "2" || type == "4") {
		$.ajax({
	        url:  "C_Menu/get_menu",
	        type: 'POST',
	        data: {type:type},
	        success: function(data){
	            var datos = JSON.parse(data);
	            datos.forEach(function(element){
	            	$('#edit-ft').append('<option value="'+element.id_menu+'"> '+element.title+' </option>'); 
	            });
	        }
	    });
	}else{
		$('#edit-ft').append(`<option value="0"> Raiz </option>`); 
	}
}

function iconChange(){
	$("#icon_flex").removeAttr('class');
	$("#icon_flex").attr('class', '');
	$('#icon_flex')[0].className = '';
	var sel = document.getElementById("icn");
	var text= sel.options[sel.selectedIndex].text;
	$("#icon_flex").addClass('ni ni-'+text);
}

function iconChange2(){
	$("#edit-icon_flex").removeAttr('class');
	$("#edit-icon_flex").attr('class', '');
	$('#edit-icon_flex')[0].className = '';
	var sel = document.getElementById("edit-icn");
	var text= sel.options[sel.selectedIndex].text;
	$("#edit-icon_flex").addClass('ni ni-'+text);
}

function Modal_Update(id_menu){
	$.ajax({
        url:  "C_Menu/get_data_edit",
        type: 'POST',
        data: {id_menu:id_menu},
        success: function(data){
            var datos = JSON.parse(data);
            console.log(datos);
            datos.forEach(function(element){
            	$("#edit-title").val(element.title);
            	$("#edit-url").val(element.url);
            	$("#modal_edit").modal("show");
            });
            $("#id_menu").val(id_menu);
            
        }
    });
	
}

function Update(){
	var title = $("#edit-title").val();
	var url = $("#edit-url").val();
	var type = $("#edit-slctype").val();
	var father = $("#edit-ft").val();
	var icon = $("#edit-icn").val();
	var roles = $("#edit-pga").val();
	var id_menu = $("#id_menu").val();
	if (title == "" || url == "" || type == "" || father == "" || icon == "") {
		swal({
            type: 'error',
            title: 'Atención',
            text: 'Ingrese todos los campos'
        });
	}else{
		$.ajax({
	        url:  "C_Menu/Update",
	        type: 'POST',
	        data: {title:title,url:url,type:type,father:father,icon,icon,roles:roles,id_menu:id_menu},
	        success: function(data){
	            var datos = JSON.parse(data);
	            console.log(datos);
	            swal({
                    type: 'success',
                    title: 'OK',
                    text: 'Registro Actulizado'
                });
	            Content();
	            $("#modal_edit").modal("hide");
	        }
	    });
	}
}

function Delete(id_menu,typem){
	swal({
        title: 'Desea eliminar este registro?',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar!'
    }).then((result) => {
        if (result == true && (typem == "2" || typem == "1")) {
            $.ajax({
		        url:  "C_Menu/Delete",
		        type: 'POST',
		        data: {id_menu:id_menu},
		        success: function(data){
		            var datos = JSON.parse(data);
		            swal({
	                    type: 'success',
	                    title: 'OK',
	                    text: 'Registro Eliminado'
	                });
		            Content();
		            location.reload();
		        }
		    });
        }else{
        	swal({
                type: 'error',
                title: 'Atencíon',
                text: 'Elimine todos los sub menús primero'
            });
        }
    }).catch(swal.noop)
}

function Content(){
	$.ajax({
        url:  "C_Menu/Content",
        type: 'POST',
        data: {},
        success: function(data){
            var datos = JSON.parse(data);
            $("#content").html(datos.table);
        }
    });
}
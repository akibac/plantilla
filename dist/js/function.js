// traduciendo del inglés a español el texto del plugin de busqueda y páginación
$(document).ready(function () {
    $(document).ajaxStart(function () {
        //$(".overlay_ajax").show();
    }).ajaxStop(function () {
        //$(".overlay_ajax").hide();
        //$(".loader_ajax2").text("");
    });
});


function UpdatePreferences(campo, valor, url) {
    $.post(url + "C_Panel/UpdatePreferences", {campo: campo, valor: valor}, function (data) {}).fail(function (error) {
        swal({title: 'Error Toma un screem y envialo a sistemas!', text: error.responseText, type: 'error'});
    });
}
function CretateTableTab(id, order = 1, asc = 'asc') {
    var table = $('#' + id).DataTable({
        scrollY: "500px",
        paging: false,
        fixedHeader: true,
        order: [[order, asc]],
        scrollX: true,
        "bScrollCollapse": true,
        "sScrollXInner": "100%"
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        table.columns.adjust();
    });
}

function Volume(h, w, d, q) {
    var vol = ((((parseInt(h) + 60) / 1000) * ((parseInt(w) + 60) / 1000) * ((parseInt(d) + 60) / 1000)) / parseInt(q));
    return Math.round(vol * 100) / 100;
}


function CreateDataTable(id, paginacion = true, Cambiodelongitud = true, busqueda = true, ordenar = true, info = true, column = null) {

    if ($.fn.DataTable.isDataTable('#' + id)) {
        $('#' + id).DataTable().destroy();
    }

    var tabla = $('#' + id).DataTable({
        'paging': paginacion,
        'lengthChange': Cambiodelongitud,
        'searching': busqueda,
        'ordering': ordenar,
        'info': info,
        "scrollY": "500px",
        "scrollCollapse": true,
        "aoColumns": column,
        "buttons": [
            'excelHtml5', //'colvis','copyHtml5','csvHtml5','pdfHtml5','print'
        ],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    })


    tabla.buttons().container()
            .appendTo($('.col-sm-6:eq(0)', tabla.table().container()));

    return tabla;
}

function TableData(id, paging = false, length = false, scrollX = true) {

    // $('a[data-toggle="tab"]').off('shown.bs.tab');

    if ($.fn.DataTable.isDataTable('#' + id)) {
        $('#' + id).DataTable().destroy();
    }

    var table = $("#" + id).DataTable({
        'paging': paging,
        "scrollY": "450px",
        "lengthChange": length,
        "scrollX": scrollX,
        "scrollCollapse": true,
//        "order": [[0, "desc"]],
        "ordering": false,
        "buttons": ['excelHtml5'],
        "fnDrawCallback": function(oSettings) {
            $(".overlay_ajax").hide();
        }
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        table.columns.adjust();
    });

    table.buttons().container().appendTo($('.col-sm-6:eq(0)', table.table().container()));

    return table;
}

function TableDatap(id, paging = false, length = false, scrollX = true, order) {

    // $('a[data-toggle="tab"]').off('shown.bs.tab');

    if ($.fn.DataTable.isDataTable('#' + id)) {
        $('#' + id).DataTable().destroy();
    }

    var table = $("#" + id).DataTable({
        'paging': paging,
        "scrollY": "450px",
        "lengthChange": length,
        "scrollX": scrollX,
        "scrollCollapse": true,
//        "order": [[0, "desc"]],
        "ordering": false,
        "buttons": [{
                extend: 'excelHtml5',
                filename: 'resumenPaquetes'+order
            }],
        "fnDrawCallback": function(oSettings) {
            $(".overlay_ajax").hide();
        }
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        table.columns.adjust();
    });

    table.buttons().container().appendTo($('.col-sm-6:eq(0)', table.table().container()));

    return table;
}

function TableData2(id, paging = false, length = false, scrollX = true, order) {

    // $('a[data-toggle="tab"]').off('shown.bs.tab');

    if ($.fn.DataTable.isDataTable('#' + id)) {
        $('#' + id).DataTable().destroy();
    }

    var table = $("#" + id).DataTable({
        'paging': paging,
        "scrollY": "450px",
        "lengthChange": length,
        "scrollX": scrollX,
        "scrollCollapse": true,
//        "order": [[0, "desc"]],
        "ordering": false,
        "buttons": [{
                text: 'Excel',
                action: function () {
                    excel(order);
                }
            }],
        "fnDrawCallback": function(oSettings) {
            $(".overlay_ajax").hide();
        }
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        table.columns.adjust();
    });

    table.buttons().container().appendTo($('.col-sm-6:eq(0)', table.table().container()));

    return table;
}


function ShowDateJS() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!

    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    var today = yyyy + '-' + mm + '-' + dd;
    return today;
}

function ValidateInput(id) {
    if ($("#" + id).val() == "") {
        $("#" + id).parents(".form-group").addClass("has-error").removeClass("has-success");
        $("#" + id).parents(".input-group").addClass("has-error").removeClass("has-success");
        return false;
    } else {
        $("#" + id).parents(".form-group").removeClass("has-error");
        $("#" + id).parents(".input-group").removeClass("has-error");
        return true;
    }
}

function validatefield() {
    var error = 0;
    $(".required").each(function () {
        var Idinput = $(this).attr("id");
        if (!ValidateInput(Idinput)) {
            error++;
        }
    });
    return (error > 0) ? false : true;
}

function Greater_zero(Control) {
    Control.value = (Control.value <= 0) ? "" : Control.value;
}

function mouseX(evt) {
    if (evt.pageX) {
        return evt.pageX;
    } else if (evt.clientX) {
        return evt.clientX + (document.documentElement.scrollLeft ?
                document.documentElement.scrollLeft :
                document.body.scrollLeft);
    } else {
        return null;
    }
}

function mouseY(evt) {
    if (evt.pageY) {
        return evt.pageY;
    } else if (evt.clientY) {
        return evt.clientY + (document.documentElement.scrollTop ?
                document.documentElement.scrollTop :
                document.body.scrollTop);
    } else {
        return null;
    }
}

function ValNumber(Control) {
    var Numer = parseInt(Control.value);
    if (isNaN(Numer)) {
        Numer = 0;
    }
    Control.value = Numer;
}

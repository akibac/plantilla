var base = "http://192.168.5.209/VisionCenter/";
$(document).ready(function(){
    var dt = 0;
    var n = 0;
    var cont = window.setInterval(function(){
        n++;
        $.ajax({
            url:  base+"C_Main/get_session",
            type: 'POST',
            data: {dt:dt},
            success: function(data){
                var res = JSON.parse(data);
                if(res == "true"){
                    // termina el ciclo
                    clearInterval(cont);
                    
                    swal({
                        type: 'warning',
                        title: 'Atención',
                        text: 'Se ha cerrado la sesión por tiempo de inactividad, se redireccionara al inicio',
                        onClose: close_alert
                    }).then((result) => {
                        if(result){
                            window.location = base;
                        }
                    });
                }
            }
        });
        // detiene la ejecucion 60000
        
    },60000);
    
    function close_alert(){
        window.location = base;
    }
});
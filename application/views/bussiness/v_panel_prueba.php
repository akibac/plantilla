<div class="content-wrapper">
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">PRUEBA</h3>
            </div>
            <div class="box-body">
                <?= $table ?>
            </div>
            <div class="box-footer">
                Footer
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tabla_prueba").DataTable();
    });

    function search(){
        alert("funciona");
    }
    
    // $.ajax({
    //     url:  "<?= base_url()?>Monitoreo/C_Monitoreo/get_data",
    //     type: 'POST',
    //     data: {orden:orden,solicitud:solicitud},
    //     success: function(data){
            
    //     }
    // });
</script>

<?= isset($sidebar_tabs) ? $sidebar_tabs : "" ?>


<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>dist/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>dist/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>dist/jquery-ui/jquery-ui.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>dist/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>dist/js/demo.js"></script>

<script src="<?= base_url() ?>dist/js/jquery.blockUI.js"></script>

<?php
if (isset($array_js)):
    foreach ($array_js as $js):
        ?>
        <script src="<?= base_url() ?>dist/<?= $js ?>"></script>
        <?php
    endforeach;
endif;
?>
        
<?php
    if (isset($btn_datatable)):
        $array = unserialize($btn_datatable);
        foreach ($array as $ajs):
            ?>
            <script src="<?= base_url() ?>dist/<?= $ajs ?>"></script>
        <?php
        endforeach;
    endif;
?>        
<script>
    var url = "<?= base_url() ?>";
    $(document).ready(function () {
        $('.sidebar-menu').tree();

        $("#radioLayaut").change(function () {
            var valor = ($("#radioLayaut").is(":checked")) ? "layout-boxed" : "";
            var campo = "layout";
            UpdatePreferences(campo, valor, url);
        });

        $("#radioSidebar").change(function () {
            var valor = ($("#radioSidebar").is(":checked")) ? "sidebar-collapse" : "";
            var campo = "sidebar";
            UpdatePreferences(campo, valor, url);
        });

        $('.preferences').click(function () {
            var valor = $(this).attr("data-skin");
            var campo = "skin";
            UpdatePreferences(campo, valor, url);
        });
    });

    function RedirectLogin() {
        location.href = "<?= base_url() ?>";
    }
    
    function Onpc(){
        $(".loader_ajax2").text("Enviando Petición...");
        $.post("<?= base_url()?>Parameters/Config/C_Wol",{},function(data){
            if(data == "Enviado"){
                
            }
        });
    }
</script>
</body>

</html>
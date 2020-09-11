
</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url() ?>dist/argon/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url() ?>dist/js/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>dist/js/mdb.min.js"></script>

<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<script src="<?= base_url() ?>dist/<?= SWEETALERT_JS ?>"></script>

<script src="<?= base_url() ?>dist/argon/assets/vendor/select2/dist/js/select2.min.js"></script>


<?php
if (isset($array_js)):
    foreach ($array_js as $js):
        ?>
        <script src="<?= base_url() ?>dist/<?= $js ?>"></script>
        <?php
    endforeach;
endif;
?>
<!-- Argon JS -->
<script src="<?= base_url() ?>dist/argon/assets/js/argon.js?v=1.2.0"></script> 
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

        $('.treeview-animated').mdbTreeview();

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        //$('.sidebar-menu').tree();

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

        $('#closep').click(function (){
            $('body').removeClass('g-sidenav-show');
            $('body').removeClass('g-sidenav-pinned');
            $('body').removeClass('nav-open');
            $('body').removeClass('g-sidenav-show').addClass('g-sidenav-hidden');
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
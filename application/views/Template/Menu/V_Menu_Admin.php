<?php 
$uri = $this->uri;
$n = 1;
$segment = $uri->segment($n);
?>
<ul class="sidebar-menu" data-widget="tree">
    <?php foreach ($menus as $m) : ?>
        <?php if ($m['type'] == 3){ ?>
            <li class="treeview <?= ($segment == $m['url']) ? 'active' : ''; ?> ">
                <a href="<?= base_url().$m['url']?>">
                    <i class="fa <?= $m['icon'] ?> "></i>
                    <span><?= $m['title'] ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right "></i>
                    </span>
                </a>
                <?php if (count($m['childs'])>0){
                    CreateChilds($m['childs'],"",$uri,$n); 
                } ?>
            </li>
        <?php }else{ ?>
            <li><a href="<?= base_url().$m['url']?>"><i class="fa <?= $m['icon'] ?> "></i> <span><?= $m['title'] ?></span></a></li>
        <?php } ?>

    <?php endforeach; ?>
</ul>

<?php 
function CreateChilds($childs,$html,$uri,$n){
    $html .= "<ul class='treeview-menu'>";
        foreach ($childs as $h) :
            if ($h['type'] == 2){
                $html .= "<li><a href='".base_url().$h['url']."'><i class='fa ".$h['icon']." text-aqua'></i> <span>".$h['title']."</span></a></li>";
            }else{
                $n++;
                $segment = $uri->segment($n);
                $active = ($segment == $h['url']) ? 'active' : '';
                $html .= "<li class='treeview $active '>
                    <a href='".base_url().$h['url']."'>
                        <i class='fa ".$h['icon']." text-aqua'></i>
                        <span>".$h['title']."</span>
                        <span class='pull-right-container'>
                            <i class='fa fa-angle-left pull-right'></i>
                        </span>
                    </a>";
                    if (count($h['childs'])>0){
                        $html = CreateChilds($h['childs'],$html,$uri,$n); 
                    }

                $html .= "</li>";
            }
        endforeach;
    $html .= "</ul>";
    echo $html;
}

?>
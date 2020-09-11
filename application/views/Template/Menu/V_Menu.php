<?php 
$uri = $this->uri;
$n = 1;
$segment = $uri->segment($n);
?>
<ul class="navbar-nav mb-md-3">
    <?php foreach ($menus as $m) :
        $ids = str_replace("/", "-", $m['url']);
     ?>
        <?php if ($m['type'] == 3){ ?>
            <li class="nav-item" id="<?= $ids ?>" style="padding-left: 21px;padding-right: 21px;">
                <a class="nav-link" data-toggle="collapse" href="#<?= 'collapse'.$ids?>">
                    <i class="ni ni-<?= $m['icon'] ?> text-primary"></i>
                    <span class="nav-link-text"><?= $m['title'] ?></span>
                </a>
                <?php if (count($m['childs'])>0){
                    CreateChilds($m['childs'],"",$uri,$n,$ids);
                } ?>
            </li>
        <?php }else{ ?>
            <li class="nav-item" style="padding-left: 21px;padding-right: 21px;">
                <a class="nav-link" href="<?= base_url().$m['url']?>"><i class="ni ni-<?= $m['icon'] ?> "></i> 
                    <span><?= $m['title'] ?></span>
                </a>
            </li>
        <?php } ?>

    <?php endforeach; ?>
</ul>

<?php 
function CreateChilds($childs,$html,$uri,$n,$url){
    $html .= "<ul class='collapse' id='collapse".$url."' data-parent='#".$url."' style='list-style: none;padding: 0px;'>";
        foreach ($childs as $h) :
            if ($h['type'] == 2){
                $html .= "<li class='nav-item' style='padding-left: 21px;padding-right: 21px;'><a class='nav-link' href='".base_url().$h['url']."'><i class='ni ni-".$h['icon']."'></i><span>".$h['title']."</span></a></li>";
            }else{
                $n++;
                $segment = $uri->segment($n);
                $active = ($segment == $h['url']) ? 'active' : '';
                if (count($h['childs'])>0){
                    $htmlA = CreateChlidsA($h['childs']);
                    $html .= "<li class='nav-item'>
                    <ul class='nav nav-tabs'>
                        <li class='nav-item dropdown' style='width: 100%;' style='padding-left: 21px;padding-right: 21px;'>
                            <a class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='padding-left: 42px;'>
                                <i class='ni ni-".$h['icon']." text-primary'></i>
                                <span class='nav-link-inner--text'>".$h['title']."</span>
                            </a>
                            ".$htmlA."
                        </li>
                    </ul>";
                }else{
                    $ids2 = str_replace("/", "-", $h['url']);
                    $html .= "<li class='nav-item'>
                                <a class='nav-link' href='#".$ids2."'>
                                    <i class='ni ni-".$h['icon']." text-primary'></i>
                                    <span class='nav-link-inner--text'>".$h['title']."</span>
                                </a>
                            </li>";
                }

                $html .= "</li>";
            }
        endforeach;
    $html .= "</ul>";
    echo $html;
}

function CreateChlidsA($childs){
    $html = "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
    foreach ($childs as $h) :
        $html .= "
                    <a class='dropdown-item' href='".base_url().$h['url']."'>
                        <i class='ni ni-".$h['icon']." text-primary'></i>
                        <span class='nav-link-inner--text'>".$h['title']."</span>
                    </a>
                ";
    endforeach;
    $html .= "</div>";
    return $html;
}

?>
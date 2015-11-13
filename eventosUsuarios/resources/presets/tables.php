<?php
class Tables {
    static function button ($icon = "", $color = "", $id = "", $class = "", $title = "", $link = false, $url = ""){ 
        if ($link){ ?> <a href ="<?= $url ?>"><?php } ?> 
        <button id="<?= $id ?>" class="btn-list fa fa-<?= $icon ?> color-bg-<?= $color ?> <?= $class ?>" title="<?= $title ?>"></button>
        <?php if ($link){ ?> </a> <?php } ?> 
    <?php }
}

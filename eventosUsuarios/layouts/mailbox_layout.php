<?php 
$this->layout = "./layouts/main_layout.php";
$this->collapsed = true;
$model = $this->model->Mailbox->Mailbox;
$content = function() use ($content_mailbox, $mailbox_view, $model){ ?>
<section class="content-with-menu mailbox <?= $mailbox_view == "compose" ? "content-with-menu-has-toolbar" : ""?>">
    <div class="content-with-menu-container" data-mailbox data-mailbox-view="<?= $mailbox_view ?>">
        <div class="inner-menu-toggle">
            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                <?= Label::mostrar_menu ?> <i class="fa fa-chevron-right"></i>
            </a>
        </div>
        
        <menu id="content-menu" class="inner-menu" role="menu">
            <div class="nano">
                <div class="nano-content">
                    
                     <div class="inner-menu-toggle-inside">
                        <a href="#" class="inner-menu-collapse">
                            <i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> <?= Label::ocultar_menu ?>
                        </a>
                        
                        <a href="#" class="inner-menu-expand" data-open="inner-menu">
                             <?= Label::mostrar_menu ?><i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    
                    <div class="inner-menu-content">
                        <a href="<?= Settings::WEB_HOST_URL ?>mailbox/compose" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                            <i class="fa fa-envelope mr-xs"></i>
                            <?= Label::redactar ?>
                        </a>
                        
                        <ul class="list-unstyled mt-xl pt-md">
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/" class="menu-item <?= $model->recibidos ? "active" : "" ?>"><?= Label::recibidos ?> <span class="label label-primary text-weight-normal pull-right">43</span></a>
                            </li>
                            <li>
                                <a href="<?= Settings::WEB_HOST_URL ?>mailbox/sent" class="menu-item <?= !$model->recibidos ? "active" : "" ?>"><?= Label::enviados ?></a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </menu>
        <?php $content_mailbox(); ?>
    </div>
</div>
<?php };

<?php 
$this->layout = "./layouts/mailbox_layout.php";
$this->active = substr_replace($this->active, "1", -2, 1);
$this->routing = array(Label::buzon_mensajes, Label::redactar);
$this->section_title = Label::redactar_correo;
$mailbox_view = "compose";
$content_mailbox = function(){ ?>
<style>   
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote-bs3.css"); 
</style>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.js"></script>
<div class="inner-body">
    <div class="inner-toolbar clearfix">
        <ul>
            <li>
                <a href="#"><i class="fa fa-send-o mr-sm"></i> <?= Label::enviar ?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-times mr-sm"></i> <?= Label::descartar ?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-paperclip mr-sm"></i> <?= Label::adjuntar ?></a>
            </li>
        </ul>
    </div>
    <div class="mailbox-compose">
        <form class="form-horizontal form-bordered form-bordered">
            
            <div class="form-group form-group-invisible">
                <label for="to" class="control-label-invisible"><?= Label::para ?>:</label>
                <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                    <input id="to" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="label label-primary" value="">
                </div>
            </div>
                
            <div class="form-group form-group-invisible">
                <label for="cc" class="control-label-invisible"><?= Label::cc ?>:</label>
                <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                    <input id="cc" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="label label-primary" value="">
                </div>
            </div>
                
            <div class="form-group form-group-invisible">
                <label for="subject" class="control-label-invisible"><?= Label::asunto ?>:</label>
                <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                    <input id="subject" type="text" class="form-control form-control-invisible" value="">
                </div>
            </div>
                
            <div class="form-group">
                <div class="compose">
                    <div id="compose-field" class="compose-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }; 
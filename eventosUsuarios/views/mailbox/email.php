<?php 
$this->layout = "./layouts/mailbox_layout.php";
$this->active = substr_replace($this->active, "1", -2, 1);
$this->routing = array(Label::buzon_mensajes, Label::correo);
$mailbox_view = "email";
$content_mailbox = function(){ ?>
<style>   
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote-bs3.css"); 
</style>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/summernote/summernote.js"></script>
<div class="inner-body mailbox-email">
    <div class="mailbox-email-header mb-lg">
        <h3 class="mailbox-email-subject m-none text-weight-light">
            Released Porto Admin! (3)
        </h3>            
        <p class="mt-lg mb-none text-md"><?= Label::de ?> <a href="#">Okler Themes</a>  <span style = "text-transform: lowercase"><?= Label::para ?></span> <a href="#">You</a>, <span style = "text-transform: lowercase"><?= Label::comenzado_en ?></span>  July, 05, 2014</p>
    </div>
    <div class="mailbox-email-container">
        <div class="mailbox-email-screen">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="fa fa-mail-reply"></a>
                        <a href="#" class="fa fa-mail-reply-all"></a>
                        <a href="#" class="fa fa-star-o"></a>
                    </div>
                        
                    <p class="panel-title">Okler Themes <i class="fa fa-angle-right fa-fw"></i> You</p>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                        
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                </div>
                <div class="panel-footer">
                    <p class="m-none"><small>July 07, 2014. 9:51pm</small></p>
                </div>
            </div>
                
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="fa fa-mail-reply"></a>
                        <a href="#" class="fa fa-mail-reply-all"></a>
                        <a href="#" class="fa fa-star-o"></a>
                    </div>
                        
                    <p class="panel-title">You <i class="fa fa-angle-right fa-fw"></i> Okler Themes
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                        
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                </div>
                <div class="panel-footer">
                    <p class="m-none"><small>July 06, 2014. 03:26pm</small></p>
                </div>
            </div>
                
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="fa fa-mail-reply"></a>
                        <a href="#" class="fa fa-mail-reply-all"></a>
                        <a href="#" class="fa fa-star-o"></a>
                    </div>
                        
                    <p class="panel-title">Okler Themes <i class="fa fa-angle-right fa-fw"></i> You
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                        
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
                </div>
                <div class="panel-footer">
                    <p class="m-none"><small>July 05, 2014. 10:03am</small></p>
                </div>
            </div>
        </div>
            
        <div class="compose">
            <div id="compose-field" class="compose">
            </div>
            <div class="text-right mt-md">
                <a href="#" class="btn btn-primary">
                    <i class="fa fa-send mr-xs"></i>
                    <?= Label::enviar ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php };

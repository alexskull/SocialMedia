<?php
$this->layout = "./layouts/main_layout.php";
$lang = $this->lang;
$content = function()  use ($lang){ ?>
    
<link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/date_time_picker.css" rel="stylesheet" type="text/css"/>
<link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/jquery.switch.css" rel="stylesheet" type="text/css"/>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/bootstrap-datepicker.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/datepicker.<?= $lang ?>.js"></script>
<script>
    $(function(){
        
        $('input.date-pick').datepicker({
            language: '<?= $lang ?>'
        });
        
    });
</script>
<section id="hero" class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <div class="text-center"><img src="<?= Settings::WEB_HOST_URL ?>content/images/logo_color.svg" alt="" data-retina="true" width="160" height="34" ></div>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <span class="fa fa-exclamation-triangle" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <?= Message::alerta_sesion_datos_invalidos ?>
                    </div> 
                    <form>
                        <div class="form-group">
                            <label class=" control-label"><?= Label::nombres ?></label>
                                
                            <input type="text" name="fullname" class="form-control" placeholder="eg.: John Doe"  required/>
                        </div>                    
                        <div class="form-group">
                            <label class=" control-label"><?= Label::pais ?> </label>
                                
                            <select name="github" class="form-control" ></select>
                        </div>
                            
                        <div class="form-group">
                            <label class=" control-label"><?= Label::provincia ?> </label>
                                
                            <select name="github" class="form-control" ></select>
                                
                        </div>
                        <div class="form-group">
                            <label class=" control-label"><?= Label::poblacion ?> </label>
                                
                            <select name="github" class="form-control" ></select>
                        </div>
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i><?= Label::fecha_nacimiento ?></label>
                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                        </div>
                        <div class="form-group">
                            <label class=" control-label"><?= Label::sexo ?> </label>
                                
                            <label class="switch-light switch-ios pull-right">
                                <input type="checkbox" name="option_4" id="option_4" value="" checked="">
                                <span>
                                    <span><?= Label::f ?></span>
                                    <span><?= Label::m ?></span>
                                </span>
                                <a></a>
                            </label>
                        </div>
                        <a href="#" class="btn_full"><?= Label::guardar ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }; 
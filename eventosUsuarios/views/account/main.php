<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::datos_personales;
$this->active = substr_replace($this->active, "1", -3, 1);
$content = function(){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script>
    $(function(){
       $("#chk-radios-form").validate(opciones_validacion); 
    });
    var opciones_validacion = {
            highlight: function( label ) {
                $(label).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function( label ) {
                $(label).closest('.form-group').removeClass('has-error');
                label.remove();
            },
            errorPlacement: function( error, element ) {
                var placement = element.closest('.input-group');
                if (!placement.get(0)) {
                    placement = element;
                }
                if (error.text() !== '') {
                    placement.after(error);
                }
            }
        };
</script>
<div class="row">
    <div class="col-md-6">
        <form id="form" action="" class="form-horizontal">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?= Label::informacion_personal?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::nombres ?><span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="fullname" class="form-control" placeholder="eg.: John Doe" 
                                    data-msg-pattern = "<?= Message::alerta_campo_clave ?>"   
                                    data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"   required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?= Label::telefono ?></label>
                        <div class="col-md-9 control-label">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input id="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::pais ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="github" class="form-control" ></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::provincia ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="github" class="form-control" ></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::poblacion ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <select name="github" class="form-control" ></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Skills <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    <!-- col-md-6 -->
    <div class="col-md-6">
        <form id="chk-radios-form" action="forms-validation.html">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>                        
                    <h2 class="panel-title">Validating Checkbox and Radios</h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::correo ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" required/>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::contraseña ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                           <input type="password" id = "clave" name="clave" class="form-control" required pattern="^\w{6,20}$" maxlength="20"
                                   data-msg-pattern = "<?= Message::alerta_campo_clave ?>"   
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::repetir_contraseña ?> <span class="required">*</span></label>
                        <div class="col-sm-9">
                                <input type="password" class="form-control" data-rule-equalto="#clave" required
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                   data-msg-equalto = "<?= Message::alerta_campo_repetir_contraseña ?>" />
                        </div>                        
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
<?php };

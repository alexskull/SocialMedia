<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::datos_personales;
$this->active = substr_replace($this->active, "1", -3, 1);
$lang = $this->lang;
$this->routing = array(Label::usuario, Label::datos_personales);
$mailbox_view = "folder";
$content = function() use ($lang){ ?>
<link href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" rel="stylesheet" type="text/css"/>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.<?= $lang ?>.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js" type="text/javascript"></script>
<script>
    $(function(){
        $("#chk-radios-form").validate(opciones_validacion); 
        var last_valid_selection = null;
        
        $('#select-categorias').change(function(event) {
            if ($(this).val().length > 5) {
                alert('You can only choose 5!');
                $(this).val(last_valid_selection);
            } else {
                last_valid_selection = $(this).val();
            }
        });
        $('.confirmation-callback').confirmation({
            btnOkLabel      : '<?= Label::guardar ?>',
            btnCancelLabel  : '<?= Label::cancelar ?>',
                title       : '<?= Label::estas_seguro ?>',
            onConfirm: function() {
                alert('You clicked: confirm' );
            },
            onCancel: function() {
                alert('You clicked: cancel' );
            }
	});
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
                    <h2 class="panel-title"><?= Label::informacion_personal ?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::nombres ?><span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nombres" class="form-control" placeholder="eg.: John Doe" 
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
                                <input name = "telefonos" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::fecha_nacimiento ?> </label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control col-sm-9" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control col-sm-9" value = "{0} <?= Label::años ?>"disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?= Label::sexo ?> </label>
                        <div class="col-sm-9">
                            <div class="radio-custom radio-primary">
                                <input id="awesome" name="sexo" type="radio" value="f" disabled>
                                <label for="f"><?= Label::femenino ?></label>
                            </div>
                            <div class="radio-custom radio-primary">
                                <input id="very-awesome" name="sexo" type="radio" value="m" disabled checked>
                                <label for="m"><?= Label::masculino ?></label>
                            </div>            
                            <label class="error" for="porto_is"></label>
                        </div>
                    </div>
                    <div class = "text-center">
                        <span class="alternative-font"><?= Label::donde_vives ?></span><br><br>
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
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-5">
                            <button class="btn btn-primary"><?= Label::guardar ?></button>
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
                    <h2 class="panel-title"><?= Label::informacion_cuenta ?></h2>
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
                        <div class="col-sm-9 col-sm-offset-5">
                            <a href="#" class="confirmation-callback"><button class="btn btn-primary"><?= Label::guardar ?></button></a>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
        <form id="chk-radios-form" action="forms-validation.html">
            <section class="panel">
                <header class="panel-heading">                 
                    <h2 class="panel-title"><?= Label::categorias_preferidas ?></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <select id ="select-categorias" class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                    <option value="numerical">Numerical Analysis</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="automata">Automata Theory</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-5">
                            <a href="#" class="confirmation-callback"><button class="btn btn-primary"><?= Label::guardar ?></button></a>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
<?php };

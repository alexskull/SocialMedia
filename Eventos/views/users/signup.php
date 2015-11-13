<?php
$this->layout = "./layouts/main_layout.php";
$content = function(){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-validation/additional-methods.js" type="text/javascript"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/general.js" type="text/javascript"></script>

<script>
    $(function(){
        $("#button-signup").on("click", function(e){
            e.preventDefault();
            signup.validar();
        });
        $("#signup-form").validate();
    });	
    var signup = {
        validar : function(){
            var form = $("#signup-form");
            var es_valido = form.valid();
            form.unbind("submit");
            if (es_valido) {            
                alert("hola");
                //signin.post();
                form.submit();
            }
            else 
                return;
        }
    }
</script>
<style>
    .form-group{
        height: 65px;
    }
</style>
<section id="hero" class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <div class="text-center"><img src="<?= Settings::WEB_HOST_URL ?>content/images/logo_color.svg" alt="" data-retina="true" width="160" height="34" ></div>
                    <hr>
                    <form id="signup-form">
                        <div class="form-group">
                            <label><?= Label::usuario ?></label>
                            <input type="text" class=" form-control"  id="username" name="username" placeholder="<?= Label::usuario ?>" required pattern = "^\w+$"
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                   data-msg-pattern = "<?= Message::alerta_campo_alfanumerico ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::correo ?></label>
                            <input type="email" class=" form-control" id="useremail" name="useremail" placeholder="<?= Label::correo ?>" required
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                   data-msg-email = "<?= Message::alerta_campo_correo ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::contraseña ?></label>
                            <input type="password" class=" form-control" id="password1" name="password1" placeholder="<?= Label::contraseña ?>" required
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::confirmar_contraseña ?></label>
                            <input type="password" class=" form-control" id="password2" name="password2" placeholder="<?= Label::confirmar_contraseña ?>" required
                                    data-rule-equalto="#password1"
                                   data-msg-required = "<?= Message::alerta_campo_obligatorio ?>"
                                   data-msg-equalto = "<?= Message::alerta_campo_repetir_contraseña ?>" >
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button id="button-signup" class="btn_full"><?= Label::crea_tu_cuenta ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }; 

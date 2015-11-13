<?php
$this->layout = "./layouts/main_layout.php";
$content = function(){ ?>
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
                        <div class="row">
                            <div class="col-md-6 col-sm-6 login_social">
                                <a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
                            </div>
                            <div class="col-md-6 col-sm-6 login_social">
                                <a href="#" class="btn btn-info btn-block "><i class="icon-twitter"></i>Twitter</a>
                            </div>
                        </div> <!-- end row -->
                        <div class="login-or"><hr class="hr-or"><span class="span-or"><?= Label::o ?></span></div>
                               
                        <div class="form-group">
                            <label><?= Label::usuario_correo ?></label>
                            <input type="text" class=" form-control " placeholder="<?= Label::usuario_correo ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::contraseña ?></label>
                            <input type="password" class=" form-control" placeholder="<?= Label::contraseña ?>">
                        </div>
                        <p class="small">
                            <a href="<?= Settings::WEB_HOST_URL ?>users/recover"><?= Label::pregunta_olvidaste_contraseña ?></a>
                        </p>
                        <a href="#" class="btn_full"><?= Label::inicia_sesion ?></a>
                        <a href="<?= Settings::WEB_HOST_URL ?>users/signup" class="btn_full_outline"><?= Label::registrate ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }; 
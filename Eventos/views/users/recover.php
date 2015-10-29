<?php
$this->layout = "./layouts/main_layout.php";
$model = $this->model->Users;
$content = function() use ($model){ ?>
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
                        <?= $model->Users->recuperar ? Message::alerta_recuperar_contraseña : Message::alerta_activar_cuenta; ?>
                    </div>
                    <form>
                        <div class="form-group">
                            <label><?= Label::usuario_correo ?></label>
                            <input type="email" class=" form-control" placeholder="<?= Label::usuario_correo ?>">
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">
                            <?= $model->Users->recuperar ? Label::recuperar_contraseña : Label::enviar_correo_activacion; ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }; 
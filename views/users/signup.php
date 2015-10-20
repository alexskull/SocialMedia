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
                    <form>
                        <div class="form-group">
                            <label><?= Label::usuario ?></label>
                            <input type="text" class=" form-control"  placeholder="<?= Label::usuario ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::correo ?></label>
                            <input type="email" class=" form-control" placeholder="<?= Label::correo ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::contraseña ?></label>
                            <input type="password" class=" form-control" id="password1" placeholder="<?= Label::contraseña ?>">
                        </div>
                        <div class="form-group">
                            <label><?= Label::confirmar_contraseña ?></label>
                            <input type="password" class=" form-control" id="password2" placeholder="<?= Label::confirmar_contraseña ?>">
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full"><?= Label::crea_tu_cuenta ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }; 

<?php
$this->layout = "./layouts/main_layout.php";
$content = function() use ($paso, $content_payment){ ?>
<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1><?= Label::confirma_participacion ?></h1>
        <div class="bs-wizard">            
            <div class="col-xs-4 bs-wizard-step <?= $paso == 1 ? "active": "complete" ?>">
                <div class="text-center bs-wizard-stepnum"><?= Label::tu_evento ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="<?= Settings::WEB_HOST_URL ?>participate/review" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step <?= $paso == 1 ? "disabled": ($paso == 2? "active" : "complete") ?>">
                <div class="text-center bs-wizard-stepnum"><?= Label::tus_datos ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="<?= Settings::WEB_HOST_URL ?>participate/details" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step <?= $paso != 3 ? "disabled": "active" ?>">
                <div class="text-center bs-wizard-stepnum"><?= Label::ya_esta ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="" class="bs-wizard-dot"></a>
            </div>  
            
        </div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->

<?php $content_payment(); };

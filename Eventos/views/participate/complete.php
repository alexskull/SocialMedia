<?php
$this->layout = "./layouts/payment_layout.php";
$paso = 3;
$content_payment = function(){ ?>
<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div><!-- End position -->
    
<div class="container margin_60">
    <div class="row">
        <div class="col-md-8">
            
            <div class="form_title">
                <h3><strong><i class="icon-ok"></i></strong><?= Label::gracias ?></h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
            <div class="step">
                <p>
                    Lorem ipsum dolor sit amet, nostrud nominati vis ex, essent conceptam eam ad. Cu etiam comprehensam nec. Cibo delicata mei an, eum porro legere no. Te usu decore omnium, quem brute vis at, ius esse officiis legendos cu. Dicunt voluptatum at cum. Vel et facete equidem deterruisset, mei graeco cetero labores et. Accusamus inciderint eu mea.
                </p>
            </div><!--End step -->
                
            <div class="form_title">
                <h3><strong><i class="icon-tag-1"></i></strong><?= Label::resumen_compra ?></h3>
                <p>
                    Mussum ipsum cacilds, vidis litro abertis.
                </p>
            </div>
            <div class="step">
                <table class="table confirm">
                    <tbody>
                        <tr>
                            <td><strong><?= Label::evento ?></strong></td>
                            <td>Evento de Prueba</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::fecha ?></strong></td>
                            <td>13/12/2015</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::hora ?></strong></td>
                            <td>20:00 - 02:00</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::lugar ?></strong></td>
                            <td>Barcelona, Anzoátegui </td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::lugar_encuentro ?></strong></td>
                            <td>Puerto La Cruz, Anzoátegui</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::forma_pago ?></strong></td>
                            <td>Tarjeta de crédito</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::total ?></strong></td>
                            <td>$154</td>
                        </tr>
                    </tbody>
                </table>
            </div><!--End step -->
        </div><!--End col-md-8 -->
            
        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner"><?= Label::gracias ?></h3>
                <p>
                    Nihil inimicus ex nam, in ipsum dignissim duo. Tale principes interpretaris vim ei, has posidonium definitiones ut. Duis harum fuisset ut his, duo an dolor epicuri appareat.
                </p>
                <hr>
                <a class="btn_full_outline" href="<?= Settings::WEB_HOST_URL ?>participate/invoice" target="_blank"><?= Label::ver_comprobante ?></a>
            </div>
        </aside>
            
    </div>
</div>
<?php };

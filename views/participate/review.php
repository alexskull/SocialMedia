<?php
$this->layout = "./layouts/payment_layout.php";
$paso = 1;
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
            <div class="alert alert-info" role="alert"><?= Message::info_previsualizar_evento ?></div>
            <h2>Titulo del evento</h3>
            <div class="row">
                <div class="col-md-3">
                    <h3><?= Label::descripcion ?></h3>
                    
                </div>
                <div class="col-md-9">
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                    </p>
                    <h4><?= Label::lugar_fecha ?></h4>
                    <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                        <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                        <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui <br>
                        <i class="icon-location-5"></i><strong> <?= Label::lugar_encuentro ?></strong>: Puerto La Cruz, Anzoátegui                   
                    <h4><?= Label::pagina_web ?></h4>
                    <p> <i class=" icon-website"></i><strong><a href="http://www.holatv.com">www.holatv.com</a></strong><br></p>
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->
            
            <hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3><?= Label::informacion_adicional ?></h3>
                </div>
                <div class="col-md-9">
                    Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                    Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                    Lorem 
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->  
        </div><!-- End col-md-8 -->
        
        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">- <?= Label::resumen ?> -</h3>
                <table class="table table_summary">
                    <tbody>
                        <tr>
                            <td><?= Label::evento ?></td>
                            <td class="text-right">Evento de Prueba</td>
                        </tr>
                        <tr>
                            <td><?= Label::fecha ?></td>
                            <td class="text-right">13/12/2015</td>
                        </tr>
                        <tr>
                            <td><?= Label::hora ?></td>
                            <td class="text-right">20:00 - 02:00</td>
                        </tr>
                        <tr>
                            <td><?= Label::lugar ?></td>
                            <td class="text-right">Barcelona, Anzoátegui </td>
                        </tr>
                        <tr>
                            <td><?= Label::lugar_encuentro ?></td>
                            <td class="text-right">Puerto La Cruz, Anzoátegui</td>
                        </tr>
                        <tr class="total">
                            <td><?= Label::total ?></td>
                            <td class="text-right">$25<td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn_full" href="<?= Settings::WEB_HOST_URL ?>participate/details"><?= Label::siguiente_paso ?></a>
                <a class="btn_full_outline" href="<?= Settings::WEB_HOST_URL ?>events/activity"><i class="icon-right"></i><?= Label::modifica_busqueda ?></a>
            </div>
        </aside><!-- End aside -->
        
    </div><!--End row -->
</div><!--End container -->
<?php };


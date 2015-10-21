<?php
$this->layout = "./layouts/main_layout.php";
$content = function(){ ?>
<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1><?= Label::confirma_participacion ?></h1>
        <div class="bs-wizard">
            
            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum"><?= Label::tu_evento ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum"><?= Label::tus_detalles ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="" class="bs-wizard-dot"></a>
            </div>
            
            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum"><?= Label::ya_esta ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <a href="" class="bs-wizard-dot"></a>
            </div>  
            
        </div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->

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
                            <td>
                                Check in
                            </td>
                            <td class="text-right">
                                10 April 2015
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Check out
                            </td>
                            <td class="text-right">
                                12 April 2015
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rooms
                            </td>
                            <td class="text-right">
                                1 double room
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nights
                            </td>
                            <td class="text-right">
                                2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Adults
                            </td>
                            <td class="text-right">
                                2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Children
                            </td>
                            <td class="text-right">
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Welcome bottle
                            </td>
                            <td class="text-right">
                                $34
                            </td>
                        </tr>
                        <tr class="total">
                            <td>
                                Total cost
                            </td>
                            <td class="text-right">
                                $154
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn_full" href="payment_hotel.html">Book now</a>
                <a class="btn_full_outline" href="single_hotel.html"><i class="icon-right"></i> Modify your search</a>
            </div>
            <div class="box_style_4">
                <i class="icon_set_1_icon-57"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </aside><!-- End aside -->
        
    </div><!--End row -->
</div><!--End container -->
<?php };


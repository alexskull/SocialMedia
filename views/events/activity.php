<?php
$this->layout = "./layouts/main_layout.php";
$lang = $this->lang;
$content = function()  use ($lang){ ?>
<style>   
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/blog.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/slider-pro.min.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/owl.carousel.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/owl.theme.css"); 
</style>

<script src="http://maps.googleapis.com/maps/api/js?libraries=places&region=es&language=<?= $lang ?>&sensor=false"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/jquery.sliderPro.min.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/owl.carousel.min.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/infobox.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/map.js"></script>
<script>
    $(function(){  
        $( '#Img_carousel' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
        $(".carousel").owlCarousel({
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
    });
</script>
<section class="parallax-window" data-parallax="scroll" data-image-src="<?= Settings::WEB_HOST_URL ?>content/images/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span>
                    <h1>Mariott Hotel</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        <span><sup>$</sup>95</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div><!-- End Position -->


<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8" id="single_tour_desc">
            <div id="single_tour_feat">
                <ul>
                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                    <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                    <li><i class="icon_set_2_icon-110"></i>Poll</li>
                    <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                    <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                    <li><i class="icon_set_1_icon-27"></i>Parking</li>
                </ul>
            </div>
            <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a></p><!-- Map button for tablets/mobiles -->
            <div id="Img_carousel" class="slider-pro">
                <div class="sp-slides">
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_large.jpg">
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_large.jpg">
                        <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                            Lorem ipsum dolor sit amet </h3>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                            consectetur adipisicing elit
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                            Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                            consectetur adipisicing elit
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg" 
                             data-small="http://bqworks.com/slider-pro/images/image8_small.jpg" 
                             data-medium="http://bqworks.com/slider-pro/images/image8_medium.jpg" 
                             data-large="http://bqworks.com/slider-pro/images/image8_large.jpg" 
                             data-retina="http://bqworks.com/slider-pro/images/image8_large.jpg"/>
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                            Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif" 
                             data-src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_medium.jpg" 
                             data-small="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_small.jpg" 
                             data-medium="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_medium.jpg" 
                             data-large="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_large.jpg" 
                             data-retina="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_large.jpg">
                    </div>
                </div>
                <div class="sp-thumbnails">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/1_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/2_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/3_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/4_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/5_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/6_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/7_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/8_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="<?= Settings::WEB_HOST_URL ?>content/images/slider_single_tour/9_medium.jpg">
                </div>
            </div>
            
            <hr>
            
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
                        <i class="icon-location-5"></i><strong> <?= Label::lugar_encuentro ?></strong>: Puerto La Cruz, Anzoátegui <a data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><?= Label::ver_en_mapa ?></a> </p>                    
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
            
            <hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3><?= Label::puntuacion_participantes ?></h3>
                </div>
                <div class="col-md-9">
                    <div id="score_detail"><span>7.5</span>Good <small>(<?= Label::basado_en_puntuaciones ?>)</small></div><!-- End general_rating -->
                    <div class="review_strip_single">
                        <img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar1.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><i class="icon-star"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single">
                        <img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar2.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><i class="icon-star"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single last">
                        <img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar3.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><i class="icon-star"></i>
                        </div>
                    </div><!-- End review strip -->
                    <div style = "text-align:center">
                            <a class="button_drop outline " ><?= Label::ver_mas ?></a></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h3><?= Label::comentarios ?></h3>
                </div>
                <div class="col-md-9">
                    
                    <h4>3 comments</h4>
                    
                    <div id="comments">
                        <ol>
                            <li>
                                <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar1.jpg" alt=""></a></div>
                                <div class="comment_right clearfix">
                                    <div class="comment_info">
                                        <?= Label::publicado_por ?> <a href="#">Anna Smith</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                                    </div>
                                    <p>
                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar2.jpg" alt=""></a></div>
                                        
                                        <div class="comment_right clearfix">
                                            <div class="comment_info">
                                                <?= Label::publicado_por ?> <a href="#">Tom Sawyer</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                                            </div>
                                            <p>
                                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                            </p>
                                            <p>
                                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="avatar"><a href="#"><img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar3.jpg" alt=""></a></div>
                                
                                <div class="comment_right clearfix">
                                    <div class="comment_info">
                                        <?= Label::publicado_por ?> <a href="#">Adam White</a><span>|</span> 25 apr 2019 <span>|</span><a href="#"><?= Label::responder ?></a>
                                    </div>
                                    <p>
                                        Cursus tellus quis magna porta adipiscin
                                    </p>
                                </div>
                            </li>
                        </ol>
                        <div style = "text-align:center">
                            <a class="button_drop outline " ><?= Label::ver_mas ?></a></div>
                    </div><!-- End Comments -->
                    
                    
                    <h4><?= Label::deja_comentario ?></h4>
                    <form action="#" method="post">
                        <div class="form-group">
                            <textarea name="message" class="form-control style_2" style="height:150px;" placeholder="<?= Message::info_sesion_comentario ?>" disabled></textarea>
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn_1" value="<?= Label::limpiar ?>"/>
                            <input type="submit" class="btn_1" value="<?= Label::publicar_comentario ?>">
                            <a href = "<?= Settings::WEB_HOST_URL ?>users/signin" class="btn_1"><?= Label::inicia_sesion ?></a>
                        </div>
                    </form>     
                </div>
            </div>
        </div><!--End  single_tour_desc-->
        
        <aside class="col-md-4">
            <p class="hidden-sm hidden-xs">
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><?= Label::ver_en_mapa ?></a>
            </p>
            <div class="box_style_2">
                <h4><?= Label::organizado_por ?></h4>
                <img src="<?= Settings::WEB_HOST_URL ?>content/images/avatar1.jpg" alt="" class="img-circle">
                <br><br>
                <a class="phone">Louise Lista</a>
                <span class="rating"><span class="icon-star voted"></span><span class="icon-star voted"></span><span class="icon-star voted"></span><span class="icon-star voted"></span><span class="icon-star-empty"></span></span><br>
                <small><a href = "#"><?= Label::ver_perfil ?></a></small>
            </div>
            <div class="box_style_1 expose">
                <h3 class="inner"><?= Label::inscripcion ?></h3>
                <h4 style = "text-align: center"><?= Message::info_participantes_inscritos ?></h4>
                <h4 style = "text-align: center"><span>5</span>/100</h4>
                
                <br>
                
                <a class="btn_full" href="<?= Settings::WEB_HOST_URL ?>participate/review"><?= Label::participar ?></a>
                <a class="btn_full_outline" href="#"><i class=" icon-heart"></i><?= Label::me_gusta ?></a>
            </div><!--/box_style_1 -->
            <div class="box_style_2">
                <h4><?= Label::participantes_inscritos ?></h4>
                <table class="table table-striped">                    
                    <tbody>
                        <tr>
                            <td><div class="image"><img src="<?= Settings::WEB_HOST_URL ?>content/images/thumb_cart_1.jpg" width = 48></div></td>
                            <td><strong><a href="#">Louvre museum</a></strong></td>
                            <td>28 Oct 2015</td>
                        </tr>
                        <tr>
                            <td><div class="image"><img src="<?= Settings::WEB_HOST_URL ?>content/images/thumb_cart_1.jpg" width = 48></div></td>
                            <td><strong><a href="#">Louvre museum</a></strong></td>
                            <td>28 Oct 2015</td>
                        </tr>
                        <tr>
                            <td><div class="image"><img src="<?= Settings::WEB_HOST_URL ?>content/images/thumb_cart_1.jpg" width = 48></div></td>
                            <td><strong><a href="#">Louvre museum</a></strong></td>
                            <td>28 Oct 2015</td>
                        </tr>
                        <tr>
                            <td><div class="image"><img src="<?= Settings::WEB_HOST_URL ?>content/images/thumb_cart_1.jpg" width = 48></div></td>
                            <td><strong><a href="#">Louvre museum</a></strong></td>
                            <td>28 Oct 2015</td>
                        </tr>  
                    </tbody>
                </table>
                <a class="button_drop outline "><?= Label::ver_mas ?></a>
            </div>
            <div class="widget tags">
                <h4><?= Label::palabras_clave ?></h4>
                <a href="#">Lorem ipsum</a>
                <a href="#">Dolor</a>
                <a href="#">Long established</a>
                <a href="#">Sit amet</a>
                <a href="#">Latin words</a>
                <a href="#">Excepteur sint</a>
            </div><!-- End widget -->
            
        </aside>
    </div><!--End row -->
</div><!--End container -->
<?php };

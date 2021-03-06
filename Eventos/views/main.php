<?php 
$this->layout = "./layouts/main_layout.php";
$content = function(){ ?>
<script src="<?= Settings::WEB_HOST_URL ?>content/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/revolution_func.js"></script>
<style>
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/extralayers.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/views/main.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/rs-plugin/css/settings.css"); 
</style>
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="content/images/slides_bg/dummy.png" alt="slidebg1" data-lazyload="content/images/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Affordable Paris Tours
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                        City Tours / Tour Tickets / Tour Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <!--<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
                </div>-->
            </li>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="content/images/slides_bg/dummy.png" alt="slidebg1" data-lazyload="content/images/slides_bg/slide_4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">More than 100 tours available
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                        Historic Buildings / Open Bus Tours / Museums Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <!--<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
                </div>
            </li>
                
                <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="content/images/slides_bg/dummy.png" alt="slidebg1" data-lazyload="content/images/slides_bg/slide_6.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Discover fantastic places
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                        We offer a variety of services and options</div>
                </div>
                <!-- LAYER NR. 3 -->
                <!--<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
                </div>-->
            </li>
                
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="content/images/slides_bg/dummy.png" alt="slidebg1" data-lazyload="content/images/slides_bg/slide_5.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CityTours provides tour guides
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                        Visit museum with a dedicated tour guide</div>
                </div>
                <!-- LAYER NR. 3 -->
                <!--<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
                </div>-->
            </li>
                
                
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <div id="search_bar_container" >
        <div class="container">
            <div class="search_bar">
                <span class="nav-facade-active" id="nav-search-in">
                    <span id="nav-search-in-content" style=""><?= Label::todos ?></span>
                    <span class="nav-down-arrow nav-sprite"></span>
                    <select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
                        <option value="All Tours"  title="All Tours">All Tours</option>
                        <option value="Museums" title="Museums">Museums</option>
                        <option value="Tickets" title="Tickets">Tickets</option>
                        <option value="Hotels" title="Hotels">Hotels</option>
                        <option value="Restaurants" title="Restaurants">Restaurants</option>
                    </select>
                </span>
                <div class="nav-searchfield-outer">
                    <input type="text" autocomplete="off" name="field-keywords" placeholder="<?= Message::info_escribe_busqueda ?>" id="twotabsearchtextbox">
                </div>
                <div class="nav-submit-button">
                    <input type="submit" title="Cerca" class="nav-submit-input" value="Search">
                </div>
            </div><!-- End search bar-->
        </div>
    </div><!-- /search_bar-->
</div>  
    
<!-- End Slider -->
    
<div class="container margin_60">
    
    <div class="main_title">
        <h2><?= Label::ultimos_eventos?></h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>
        
    <div class="row">
        
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_2.jpg"  width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>9.0</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Mariott</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_3.jpg"  width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>9.5</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Lumiere</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_4.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Novelle</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_5.jpg"  width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>8.0</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Louvre</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="content/images/hotel_6.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div id="score"><span>8.5</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Concorde</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->
            
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="<?= Settings::WEB_HOST_URL ?>events" class="btn_1 medium"><i class="icon-eye-7"></i><?= Label::ver_todos_eventos ?> (70) </a>
    </p>
</div><!-- End container -->
    
<div class="white_bg">
    <div class="container margin_60">
        <div class="main_title">
            <h2><?= Label::otros_eventos_populares ?></h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <div class="row add_bottom_45">
            <div class="col-md-4 other_tours">
                <ul>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>Tour Eiffel<span class="other_tours_price">$42</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-30"></i>Shopping tour<span class="other_tours_price">$35</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Versailles tour<span class="other_tours_price">$20</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>Montparnasse skyline<span class="other_tours_price">$26</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Pompidue<span class="other_tours_price">$26</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>Senna River tour<span class="other_tours_price">$32</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 other_tours">
                <ul>
                    <li><a href="#"><i class="icon_set_1_icon-1"></i>Notredame<span class="other_tours_price">$48</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-4"></i>Lafaiette<span class="other_tours_price">$55</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-30"></i>Trocadero<span class="other_tours_price">$76</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>Open Bus tour<span class="other_tours_price">$55</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-30"></i>Louvre museum<span class="other_tours_price">$24</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>Madlene Cathedral<span class="other_tours_price">$24</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 other_tours">
                <ul>
                    <li><a href="#"><i class="icon_set_1_icon-37"></i>Montparnasse<span class="other_tours_price">$36</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-1"></i>D'Orsey museum<span class="other_tours_price">$28</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-50"></i>Gioconda Louvre musuem<span class="other_tours_price">$44</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Tour Eiffel<span class="other_tours_price">$56</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-50"></i>Ladefanse<span class="other_tours_price">$16</span></a>
                    </li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Notredame<span class="other_tours_price">$26</span></a>
                    </li>
                </ul>
            </div>
        </div><!-- End row -->
            
        <div class="banner colored">
            <h4>Discover our Top tours <span>from $34</span></h4>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
            </p>
            <a href="single_tour.html" class="btn_1 white">Read more</a>
        </div>
        <div class="main_title">
            <h2><?=Label::blog_ultimas_entradas?></h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="content/images/bus.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>Sightseen tour</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="content/images/transfer.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>Transfer</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="content/images/guide.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>Tour guide</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="content/images/hotel.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>Hotel</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->
    
<section class="parallax-window" data-parallax="scroll" data-image-src="content/images/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 magnific">
        <div>
            <h3>BELONG ANYWHERE</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
</section><!-- End section -->
    
<div class="container margin_60">
    
    <div class="main_title">
        <h2>Some <span>good</span> reasons</h2>
        <p>
            Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
        </p>
    </div>
        
    <div class="row">
        
        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
            <div class="feature_home">
                <i class="icon_set_1_icon-41"></i>
                <h3><span>+120</span> Premium tours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>
            
        <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="feature_home">
                <i class="icon_set_1_icon-30"></i>
                <h3><span>+1000</span> Customers</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>
            
        <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="feature_home">
                <i class="icon_set_1_icon-57"></i>
                <h3><span>H24 </span> Support</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>
            
    </div><!--End row -->
        
</div><!-- End container -->

        
<?php }; 
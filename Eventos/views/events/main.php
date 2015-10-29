<?php
$this->layout = "./layouts/main_layout.php";
$lang = $this->lang;
$content = function()  use ($lang){ ?>
<style>    
    @import url("<?= Settings::WEB_HOST_URL ?>content/stylesheets/date_time_picker.css"); 
    @import url("<?= Settings::WEB_HOST_URL ?>content/skins/square/blue.css"); 
</style>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/icheck.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&region=es&language=<?= $lang ?>&sensor=false"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/infobox.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/map_hotels.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/bootstrap-datepicker.js"></script>
<script src="<?= Settings::WEB_HOST_URL ?>content/scripts/datepicker.<?= $lang ?>.js"></script>
 <script>
    $(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });
        $('input.date-pick').datepicker({
            language: '<?= $lang ?>'
        });
        $('input.date-pick').datepicker('setDate', 'today');
                   
     });
    
  </script>
<section class="parallax-window" data-parallax="scroll" data-image-src="<?= Settings::WEB_HOST_URL ?>content/images/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Paris Hotels</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
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
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div><!-- Position -->
        
<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->
    
    <div  class="container margin_60">
    
    <div class="row">
        <aside class="col-lg-3 col-md-3">
            <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><?= Label::ver_en_mapa ?></a>
            </p>
            
            <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
                    <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>
                </ul>
            </div>    
            <div id="filters_col">
                <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i><?= Label::filtros ?><i class="icon-plus-1 pull-right"></i></a>
                <div class="collapse" id="collapseFilters">
                    <div class="filter_type">
                        <h6><?= Label::fecha_evento ?></h6>
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i> <?= Label::desde ?></label>
                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                        </div>
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i> <?= Label::hasta ?></label>
                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                        </div>
                    </div>
                    <div class="filter_type">
                        <h6><?= Label::provincias ?></h6>
                        <ul>
                            <li><label><input type="checkbox">Pet allowed (1)</label></li>
                            <li><label><input type="checkbox">Groups allowed (1)</label></li>
                            <li><label><input type="checkbox">Tour guides (1)</label></li>
                            <li><label><input type="checkbox">Access for disabled (1)</label></li>
                        </ul>
                    </div>
                    <div class="filter_type">
                        <h6><?= Label::poblaciones ?></h6>
                        <ul>
                            <li><label><input type="checkbox">Pet allowed (1)</label></li>
                            <li><label><input type="checkbox">Groups allowed (1)</label></li>
                            <li><label><input type="checkbox">Tour guides (1)</label></li>
                            <li><label><input type="checkbox">Access for disabled (1)</label></li>
                        </ul>
                    </div>
                </div><!--End collapse -->
            </div><!--End filters col-->
            <div class="box_style_2">
                <i class="icon_set_1_icon-57"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 200am - 7.30pm</small>
            </div>
        </aside><!--End aside -->
                    
        <div class="col-lg-9 col-md-9">
            
            <div id="tools">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select name="sort_price" id="sort_price">
                                <option value="" selected><?= Label::ordenar_por_relevancia ?></option>
                                <option value="lower"><?= Label::mayor_relevancia ?></option>
                                <option value="higher"><?= Label::menor_relevancia ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select  name="sort_rating" id="sort_rating">
                                <option value="" selected><?= Label::ordenar_por_publicacion ?></option>
                                <option value="lower"><?= Label::publicaciones_recientes ?></option>
                                <option value="higher"><?= Label::publicaciones_antiguas ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select  name="sort_rating" id="sort_rating">
                                <option value="" selected><?= Label::ordenar_por_fecha ?></option>
                                <option value="lower"><?= Label::proximos ?></option>
                                <option value="higher"><?= Label::pasados ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select-filters">
                            <select  name="sort_rating" id="sort_rating">
                                <option value="" selected><?= Label::ordenar_por_cantidad_inscritos ?></option>
                                <option value="lower"><?= Label::mas_participantes ?></option>
                                <option value="higher"><?= Label::menos_participantes ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!--/tools -->
                
            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">                         
                        <div class="img_list"><a href="<?= Settings::WEB_HOST_URL ?>events/activity"><img src="<?= Settings::WEB_HOST_URL ?>content/images/hotel_1.jpg" alt="">
                                <div class="short_info"></div>
                            </a>
                        </div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div id="score"><?= Label::participantes_inscritos ?><span>20</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i><small>(75)</small></div>
                            <h3><strong>Park Hyatt</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                                <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                                <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><?= Label::gratis ?><br><br>
                                <p><a href="<?= Settings::WEB_HOST_URL ?>events/activity" class="btn_1"><?= Label::detalles ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End strip -->
                                    
            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img_list"><a href="<?= Settings::WEB_HOST_URL ?>events/activity"><img src="<?= Settings::WEB_HOST_URL ?>content/images/hotel_2.jpg" alt="">
                                <div class="short_info"></div>
                            </a>
                        </div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div id="score"><?= Label::participantes_inscritos ?><span>20</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i><small>(75)</small></div>
                            <h3><strong>Mariott</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                                <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                                <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>39<br><br>
                                <p><a href="<?= Settings::WEB_HOST_URL ?>events/activity" class="btn_1"><?= Label::detalles ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End strip -->
                                    
            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img_list"><a href="<?= Settings::WEB_HOST_URL ?>events/activity"><img src="<?= Settings::WEB_HOST_URL ?>content/images/hotel_3.jpg" alt="">
                                <div class="short_info"></div>
                            </a>
                        </div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div id="score"><?= Label::participantes_inscritos ?><span>20</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><small>(75)</small></div>
                            <h3><strong>Lumiere</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                                <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                                <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>129<br><br>
                                <p><a href="<?= Settings::WEB_HOST_URL ?>events/activity" class="btn_1"><?= Label::detalles ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End strip -->
                                    
            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img_list"><a href="<?= Settings::WEB_HOST_URL ?>events/activity"><img src="<?= Settings::WEB_HOST_URL ?>content/images/hotel_4.jpg" alt="">
                                <div class="short_info"></div>
                            </a>
                        </div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div id="score"><?= Label::participantes_inscritos ?><span>0</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><small>(75)</small></div>
                            <h3><strong>Concorde</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                                <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                                <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>119<br><br>
                                <p><a href="<?= Settings::WEB_HOST_URL ?>events/activity" class="btn_1"><?= Label::detalles ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End strip -->
                                    
            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img_list"><a href="<?= Settings::WEB_HOST_URL ?>events/activity"><img src="<?= Settings::WEB_HOST_URL ?>content/images/hotel_5.jpg" alt="">
                                <div class="short_info"></div>
                            </a>
                        </div>
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1">{0}<span class="tooltip-content-flip"><span class="tooltip-back"><?= Message::info_evento_like ?></span></span></a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="tour_list_desc">
                            <div id="score"><?= Label::participantes_inscritos ?><span>13</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><small>(75)</small></div>
                            <h3><strong>Concorde</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <p> <i class="icon-calendar"></i><strong> <?= Label::fecha ?></strong>: 13/12/2015<br>
                                <i class="icon-clock"></i><strong> <?= Label::hora ?></strong>: 20:00 - 02:00<br>
                                <i class="icon-location-5"></i><strong> <?= Label::lugar ?></strong>: Barcelona, Anzoátegui</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>129<br><br>
                                <p><a href="<?= Settings::WEB_HOST_URL ?>events/activity" class="btn_1"><?= Label::detalles ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End strip -->
                                    
            <hr>
                    
            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div><!-- end pagination-->
                    
        </div><!-- End col lg-9 -->
    </div><!-- End row -->
</div><!-- End container -->

<?php };


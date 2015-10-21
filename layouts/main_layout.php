<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title><?= $this->title ?></title>
        <link rel="shortcut icon" href="<?= Settings::WEB_HOST_URL ?>content/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-144x144-precomposed.png">
        <link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/base.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/layouts/main_layout.css" rel="stylesheet" type="text/css"/>
        <!-- Common scripts -->
        <script src="<?= Settings::WEB_HOST_URL ?>content/scripts/jquery-1.11.2.min.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>content/scripts/common_scripts_min.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>content/scripts/functions.js"></script>
        

    </head>

    <body>
        <div id="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
        <div class="layer"></div>
        <header id = "colored">
            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul id="top_links">
                                
                                <li><a href="#"><?= Label::ayuda ?></a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div id="logo">
                            <a href="<?= Settings::WEB_HOST_URL ?>"><img src="<?= Settings::WEB_HOST_URL ?>content/images/logo_color.svg" width="160" height="34" alt="Even" data-retina="true" class="logo_normal"></a>
                            <a href="<?= Settings::WEB_HOST_URL ?>"><img src="<?= Settings::WEB_HOST_URL ?>content/images/logo_white.svg" width="160" height="34" alt="Even" data-retina="true" class="logo_sticky"></a>
                        </div>
                    </div>
                    <nav class="col-md-9 col-sm-9 col-xs-9">
                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                        <div class="main-menu">
                            <div id="header_menu">
                                <img src="content/images/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                            </div>
                            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <ul>
                                <li><a href="<?= Settings::WEB_HOST_URL ?>"><?= Label::inicio ?></a></li>
                                <li><a href="<?= Settings::WEB_HOST_URL ?>"><?= Label::publicar_evento ?></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu"><?= Label::ver_categorias ?><i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_tours_list.html">All tours list</a></li>
                                        <li><a href="all_tours_grid.html">All tours grid</a></li>
                                        <li><a href="single_tour.html">Single tour page</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= Settings::WEB_HOST_URL ?>"><?= Label::visita_nuestro_blog ?></a></li>
                                <!--<li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_tours_list.html">All tours list</a></li>
                                        <li><a href="all_tours_grid.html">All tours grid</a></li>
                                        <li><a href="single_tour.html">Single tour page</a></li>
                                        <li><a href="single_tour_with_gallery.html">Single tour with gallery</a></li>
                                        <li><a href="single_tour_working_booking.php">Single tour working booking</a></li>
                                    </ul>
                                </li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Hotels <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_hotels_list.html">All hotels list</a></li>
                                        <li><a href="all_hotels_grid.html">All hotels grid</a></li>
                                        <li><a href="single_hotel.html">Single hotel page</a></li>
                                        <li><a href="single_hotel_working_booking.php">Single hotel working booking</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Transfers <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_transfer_list.html">All transfers list</a></li>
                                        <li><a href="all_transfer_grid.html">All transfers grid</a></li>
                                        <li><a href="single_transfer.html">Single transfer page</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu submenu">
                                    <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                                    <div class="menu-wrapper">
                                        <div class="col-md-4">
                                            <h3>Pages</h3>
                                            <ul>
                                                <li><a href="about.html">About us</a></li>
                                               <li><a href="general_page.html">General page</a></li>
                                                <li><a href="tourist_guide.html">Tourist guide</a></li>
                                                <li><a href="cart.html">Cart Tours</a></li>
                                                <li><a href="payment.html">Payment Tours</a></li>
                                                 <li><a href="confirmation.html">Confirmation Tours</a></li>
                                                 <li><a href="cart_hotel.html">Cart Hotel</a></li>
                                                <li><a href="payment_hotel.html">Payment Hotel</a></li>
                                                 <li><a href="confirmation_hotel.html">Confirmation Hotel</a></li>
                                                 <li><a href="wishlist.html">Wishlist page</a></li>
                                                 <li><a href="faq.html">Faq</a></li>
                                                 <li><a href="pricing_tables.html">Pricing tables</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Pages</h3>
                                            <ul>
                                                <li><a href="contact_us_1.html">Contact us 1</a></li>
                                                <li><a href="contact_us_2.html">Contact us 2</a></li>
                                                 <li><a href="blog_right_sidebar.html">Blog</a></li>
                                                <li><a href="blog.html">Blog left sidebar</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                                <li><a href="404.html">404 Error page</a></li>
                                                <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                                <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                                <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                                <li><a href="timeline.html">Tour timeline</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Elements</h3>
                                            <ul>
                                                <li><a href="index.html"><i class="icon-columns"></i> Header transparent</a></li>
                                                <li><a href="header_plain.html"><i class="icon-columns"></i> Header plain</a></li>
                                                <li><a href="header_transparent_colored.html"><i class="icon-columns"></i> Header transparent colored</a></li>
                                                <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                                <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                                <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                                <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                                <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                                <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>-->
                            </ul> 
                        </div><!-- End main-menu -->
                        <ul id="top_tools">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link"><?= Label::iniciar_sesion_registrarse ?></a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_facebook">
                                                    <i class="icon-facebook"></i>Facebook </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_paypal">
                                                    <i class="icon-twitter"></i>Twitter </a>
                                            </div>
                                        </div>
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or"><?= Label::o ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="<?= Label::usuario_correo ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="<?= Label::contraseña ?>">
                                        </div>
                                        <a id="forgot_pw" href="<?= Settings::WEB_HOST_URL ?>users/recover"><?= Label::pregunta_olvidaste_contraseña ?></a>
                                        <input type="submit" name="" value="<?= Label::inicia_sesion ?>" class="button_drop">
                                        <a href="<?= Settings::WEB_HOST_URL ?>users/signup"><input type="submit" name="" value="<?= Label::registrate ?>" class="button_drop outline"></a>
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="#"><?= Label::cerrar_sesion ?></a></li>
                            <li>
                                <div class="dropdown dropdown-cart">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"></i><i class="icon-mail-alt"></i> (0) </a>
                                    <ul class="dropdown-menu" id="cart_items">
                                        <li>
                                            <div class="image"><img src="content/images/thumb_cart_1.jpg" alt=""></div>
                                            <strong>
                                                                                    <a href="#">Louvre museum</a>1x $36.00 </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li>
                                            <div class="image"><img src="content/images/thumb_cart_2.jpg" alt=""></div>
                                            <strong>
                                                                                    <a href="#">Versailles tour</a>2x $36.00 </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li>
                                            <div class="image"><img src="content/images/thumb_cart_3.jpg" alt=""></div>
                                            <strong>
                                                                                    <a href="#">Versailles tour</a>1x $36.00 </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li class = "li-ver_mensajes">
                                            <a class="button_drop outline "><?= Label::ver_mensajes ?></a>
                                        </li>
                                    </ul>
                                </div><!-- End dropdown-cart-->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!-- container -->
        </header><!-- End Header -->
        <?= 
        $content(); 
        ?>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <h3>Need help?</h3>
                        <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                        <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                             <li><a href="#">Terms and condition</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>Discover</h3>
                        <ul>
                            <li><a href="#">Community blog</a></li>
                            <li><a href="#">Tour guide</a></li>
                            <li><a href="#">Wishlist</a></li>
                             <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h3><?= Label::idiomas ?></h3>
                        <div class="styled-select">
                            <select class="form-control" name="lang" id="lang">
                                <option value="ES" selected><?= Label::español ?></option>
                                <option value="EN"><?= Label::ingles ?></option>
                            </select>
                        </div>
                    </div>
                </div><!-- End row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="social_footer">
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-google"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-vimeo"></i></a></li>
                                <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <p>© Citytours 2015</p>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </footer><!-- End footer -->

        <div id="toTop"></div><!-- Back to top button -->
    </body>
</html>
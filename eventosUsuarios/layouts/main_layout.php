
<!doctype html>
<html class="fixed <?= $this->collapsed ? "sidebar-left-collapsed" : "" ?> ">
    <head>
        
        <!-- Basic -->
        <meta charset="UTF-8">
            
        <title><?= "Even :: ".Label::panel_usuarios." - ".$this->title ?></title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
        <link rel="shortcut icon" href="<?= Settings::WEB_HOST_URL ?>content/images/favicon.ico" type="image/x-icon">s    
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            
        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
            
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap/css/bootstrap.css" />
            
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
            
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/stylesheets/theme.css" />
            
        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/stylesheets/skins/default.css" />
            
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?= Settings::WEB_HOST_URL ?>assets/stylesheets/theme-custom.css">
        <link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/general.css" rel="stylesheet" type="text/css"/>
        <!-- Head Libs -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/modernizr/modernizr.js"></script>
            
        <!-- Vendor -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery/jquery.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>   
        <!-- Specific Page Vendor -->
        <!-- Theme Base, Components and Settings -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/theme.js"></script>
                
                
        <!-- Theme Initialization Files -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/theme.init.js"></script>        
        <script src="<?= Settings::WEB_HOST_URL ?>content/scripts/moment.js" type="text/javascript"></script>
        <script src="<?= Settings::WEB_HOST_URL ?>content/scripts/general.js"></script>
    </head>
    <body>
        <style>
            .modal-wrapper{
                padding: 0px !Important;
            }
        </style>
        <section class="body">
            
            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="<?= Settings::WEB_HOST_URL ?>content/images/logo_color.svg" height="35" alt = "Even"/>
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                    
                <!-- start: search & user box -->
                <div class="header-right">
                    
                    <span class="separator"></span>
                        
                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>
                                
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">230</span>
                                    Messages
                                </div>
                                    
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Doe</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joe Junior</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                            </a>
                                        </li>
                                    </ul>
                                        
                                    <hr />
                                        
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                        
                    <span class="separator"></span>
                        
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name">John Doe Junior</span>
                                <span class="role">administrator</span>
                            </div>
                                
                            <i class="fa custom-caret"></i>
                        </a>
                            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
                
            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                    
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            <?= Label::menu_principal ?>
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                        
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <?php if (strlen($this->session) >= 1 && substr($this->session, -1, 1) == "1"){ ?>
                                    <li class = "<?= substr($this->active, -1, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span><?= Label::inicio ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 2 && $this->session, -2, 1) == "1"){  ?>                                    
                                    <li class = "<?= substr($this->active, -2, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>mailbox">
                                            <span class="pull-right label label-primary">182</span>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span><?= Label::buzon_mensajes ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 3 && $this->session, -3, 1) == "1" ||
                                        substr(strlen($this->session) >= 4 && $this->session, -4, 1) == "1" ||
                                        substr(strlen($this->session) >= 5 && $this->session, -5, 1) == "1" ){  ?>  
                                    <li class="nav-parent 
                                        <?= substr($this->active, -3, 1) == "1" ||  
                                            substr($this->active, -4, 1) == "1" ||  
                                            substr($this->active, -5, 1) == "1"? "nav-active nav-expanded" : "" ?>">
                                        <a>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span><?= Label::usuario ?></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <?php if (substr(strlen($this->session) >= 3 && $this->session, -3, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -3, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>account/">
                                                    <?= Label::datos_personales ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 4 && $this->session, -4, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -4, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>account/gallery">
                                                    <?= Label::galeria_imagenes ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 5 && $this->session, -5, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -5, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>account/favs">
                                                    <?= Label::favoritos ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 6 && $this->session, -6, 1) == "1" ||
                                        substr(strlen($this->session) >= 7 && $this->session, -7, 1) == "1" ){  ?>  
                                    <li class="nav-parent 
                                        <?= substr($this->active, -6, 1) == "1" ||  
                                            substr($this->active, -7, 1) == "1"  ? "nav-active nav-expanded" : "" ?>">
                                        <a>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span><?= Label::eventos ?></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <?php if (substr(strlen($this->session) >= 6 && $this->session, -6, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -6, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>events/">
                                                    <?= Label::mis_eventos ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 7 && $this->session, -7, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -7, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>events/favs">
                                                    <?= Label::favoritos ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } 
                                    if (strlen($this->session) >= 8 && substr($this->session, -8, 1) == "1"){ ?>
                                    <li class = "<?= substr($this->active, -8, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>homegallery">
                                            <i class="fa fa-image" aria-hidden="true"></i>
                                            <span><?= Label::galeria_inicio ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (strlen($this->session) >= 9 && substr($this->session, -9, 1) == "1"){ ?>
                                    <li class = "<?= substr($this->active, -9, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>basic">
                                            <i class="fa fa-gear" aria-hidden="true"></i>
                                            <span><?= Label::configuracion ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (strlen($this->session) >= 10 && substr($this->session, -10, 1) == "1"){ ?>
                                    <li class = "<?= substr($this->active, -10, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>manage_users">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span><?= Label::gestionar_usuarios ?></span>
                                        </a>
                                    </li>
                                    <?php }  
                                    if (substr(strlen($this->session) >= 11 && $this->session, -11, 1) == "1" ||
                                        substr(strlen($this->session) >= 12 && $this->session, -12, 1) == "1" ){  ?>  
                                    <li class="nav-parent 
                                        <?= substr($this->active, -11, 1) == "1" ||  
                                            substr($this->active, -12, 1) == "1"  ? "nav-active nav-expanded" : "" ?>">
                                        <a>
                                            <i class="fa fa-coffee" aria-hidden="true"></i>
                                            <span><?= Label::gestionar_eventos ?></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <?php if (substr(strlen($this->session) >= 11 && $this->session, -11, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -11, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>manage_events/">
                                                    <?= Label::listado ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 12 && $this->session, -12, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -12, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>manage_events/edit">
                                                    <?= Label::crear_nuevo ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 13 && $this->session, -13, 1) == "1" ||
                                        substr(strlen($this->session) >= 14 && $this->session, -14, 1) == "1" ){  ?>  
                                    <li class="nav-parent 
                                        <?= substr($this->active, -13, 1) == "1" ||  
                                            substr($this->active, -14, 1) == "1"  ? "nav-active nav-expanded" : "" ?>">
                                        <a>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            <span><?= Label::gestionar_blog ?></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <?php if (substr(strlen($this->session) >= 13 && $this->session, -13, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -13, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>manage_blog/">
                                                    <?= Label::entradas ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 14 && $this->session, -14, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -14, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= $this->root ?>manage_blog/edit">
                                                    <?= Label::crear_entrada ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 15 && $this->session, -15, 1) == "1"){  ?>                                    
                                    <li class = "<?= substr($this->active, -15, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= $this->root ?>billing">
                                            <i class="fa fa-dollar" aria-hidden="true"></i>
                                            <span><?= Label::facturacion ?></span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </nav>      
                        </div>                            
                    </div>                        
                </aside>
                <!-- end: sidebar -->
                    
                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2><?= $this->section_title ?></h2>
                            
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?= Settings::WEB_HOST_URL ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <?php for ( $i = 0 ; $i < count($this->routing) ; $i++ ){ ?>
                                <li><span><?= $this->routing[$i] ?></span></li>
                                <?php } ?>
                            </ol>
                                
                            <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
                        </div>
                    </header>
                        
                    <!-- start: page -->
                    <?= $content(); ?>    
                    <!-- end: page -->
                </section>
            </div>
        </section>
        <div style ="display:none">
            <div id="modal-confirm" class="modal-block modal-block-primary">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title"><?= Label::confirmacion ?></h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-icon">
                                <i class="fa fa-question-circle"></i>
                            </div>
                            <div class="modal-text">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary modal-confirm"><?= Label::aceptar ?></button>
                                <button class="btn btn-default modal-dismiss"><?= Label::cancelar ?></button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
            <div id="modal-info" class="modal-block modal-block-info">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title"><?= Label::informacion ?></h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-icon">
                                <i class="fa fa-info-circle"></i>
                            </div>
                            <div class="modal-text">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-info modal-confirm"><?= Label::aceptar ?></button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
            <div id="modal-alert" class="modal-block modal-block-warning">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title"><?= Label::alerta ?></h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-icon">
                                <i class="fa fa-warning"></i>
                            </div>
                            <div class="modal-text">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-warning modal-confirm"><?= Label::aceptar ?></button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </div>
        <input type ="hidden" id ="hidden-lang" value ="<?= $this->lang ?>">
        <a id ="modal" class ="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modal-div" style ="display:none"></a>
        <div id ="modal-div" class ="zoom-anim-dialog mfp-hide"></div>
    </body>
</html>
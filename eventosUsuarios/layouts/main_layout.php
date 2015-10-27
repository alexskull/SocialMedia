<!doctype html>
<html class="fixed <?= $this->collapsed ? "sidebar-left-collapsed" : "" ?> ">
    <head>
        
        <!-- Basic -->
        <meta charset="UTF-8">
            
        <title><?= $this->title ?></title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
            
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
                
        <!-- Theme Custom -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/theme.custom.js"></script>
                
        <!-- Theme Initialization Files -->
        <script src="<?= Settings::WEB_HOST_URL ?>assets/javascripts/theme.init.js"></script>
    </head>
    <body>
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
                                        <a href="<?= Settings::WEB_HOST_URL ?>">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span><?= Label::inicio ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 2 && $this->session, -2, 1) == "1"){  ?>                                    
                                    <li class = "<?= substr($this->active, -2, 1) == "1" ? "nav-active" : "" ?>">
                                        <a href="<?= Settings::WEB_HOST_URL ?>mailbox">
                                            <span class="pull-right label label-primary">182</span>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                             <span><?= Label::buzon_mensajes ?></span>
                                        </a>
                                    </li>
                                    <?php } 
                                    if (substr(strlen($this->session) >= 3 && $this->session, -3, 1) == "1" ||
                                        substr(strlen($this->session) >= 3 && $this->session, -4, 1) == "1" ){  ?>  
                                    <li class="nav-parent 
                                        <?= substr($this->active, -3, 1) == "1" ||  
                                            substr($this->active, -4, 1) == "1" ? "nav-active nav-expanded" : "" ?>">
                                        <a>
                                            <i class="fa fa-gear" aria-hidden="true"></i>
                                            <span><?= Label::configuracion ?></span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <?php if (substr(strlen($this->session) >= 3 && $this->session, -3, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -3, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= Settings::WEB_HOST_URL ?>account/">
                                                    <?= Label::datos_personales ?>
                                                </a>
                                            </li>
                                            <?php } 
                                            if (substr(strlen($this->session) >= 4 && $this->session, -4, 1) == "1"){  ?>  
                                            <li class = "<?= substr($this->active, -4, 1) == "1" ? "nav-active" : "" ?>">
                                                <a href="<?= Settings::WEB_HOST_URL ?>account/gallery">
                                                    <?= Label::galeria_imagenes ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
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
                                
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
                        
                    <!-- start: page -->
                    <?= $content(); ?>    
                    <!-- end: page -->
                </section>
            </div>
                
            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
                            
                            <div class="sidebar-right-wrapper">
                                
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
                                    
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
                                
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                                <ul>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </aside>
        </section>
        <input type ="text" id ="hidden-lang" value ="<?= $this->lang ?>"
    </body>
</html>
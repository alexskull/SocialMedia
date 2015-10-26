<?php
require('./resources/constants/settings.php');
require('./resources/constants/util.php');
require('./resources/constants/session.php');
require('./resources/constants/view.php');
require('./resources/dictionaries/lang.php');

Session::CHECK_SESSION_TIMEOUT();

$_SESSION["permisos"] = 3;

$uri        = explode('/', $_SERVER['REQUEST_URI']);
$view       = new View($lang);
$response   = $view->load_elements($uri);
$model      = new stdClass();


if (!$response) echo Message::pagina_no_encontrada;





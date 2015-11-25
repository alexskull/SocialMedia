<?php
require('./resources/constants/settings.php');
require('./resources/constants/util.php');
require('./resources/constants/session.php');
require('./resources/constants/view.php');

Session::CHECK_SESSION_TIMEOUT();

$_SESSION["permisos"] = 65535;
$_SESSION["usuarios_id"] = 2;
$_SESSION["eventos_id"] = 2;

$uri        = explode('/', $_SERVER['REQUEST_URI']);
$view       = new View();
$response   = $view->load_elements($uri);
$model      = new stdClass();


if (!$response) echo Message::pagina_no_encontrada;





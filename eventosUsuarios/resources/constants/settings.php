<?php
class Settings {
    const WEB_MAIN_HOST_URL = "http://localhost/Eventos/";  
    const WEB_HOST_URL = "http://localhost/EventosUsuarios/";  
    const WEB_SERVICES_URL = "http://evtapi.startup-xpress.com/";  
    const HOST_URL = "localhost/EventosUsuarios"; 
    const SERVER_TIMEZONE = "America/Caracas";
    const SESSION_TIMEOUT = 1800;
    const MAIN_ACTION = "main";
}
date_default_timezone_set(Settings::SERVER_TIMEZONE);
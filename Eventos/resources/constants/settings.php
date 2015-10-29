<?php
class Settings {
    const WEB_HOST_URL = "http://localhost/SocialMedia/Eventos";  
    const WEB_SERVICES_URL = "";  
    const HOST_URL = "localhost/SocialMedia/Eventos"; 
    const URL_SLASHES = 6;
    const SERVER_TIMEZONE = "America/Caracas";
    const SESSION_TIMEOUT = 1800;
    const MAIN_ACTION = "main";
}
date_default_timezone_set(Settings::SERVER_TIMEZONE);
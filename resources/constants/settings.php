<?php
class Settings {
    const WEB_HOST_URL = "http://startup-xpress.com/eventos/";  
    const WEB_SERVICES_URL = "";  
    const HOST_URL = "startup-xpress.com/eventos/"; 
    const URL_SLASHES = 5;
    const SERVER_TIMEZONE = "America/Caracas";
    const SESSION_TIMEOUT = 1800;
    const MAIN_ACTION = "main";
}
date_default_timezone_set(Settings::SERVER_TIMEZONE);
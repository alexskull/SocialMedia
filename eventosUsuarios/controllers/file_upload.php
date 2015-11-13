<?php
class file_upload {
    function main($handler){
        error_reporting(E_ALL | E_STRICT);
        require('./functions/upload_handler.php');
        switch($handler){
            case "Account": $_SESSION["dir"] = $handler."/".$_SESSION["usuarios_id"]; break;
            case "Manage_events": $_SESSION["dir"] = $handler."/".$_SESSION["eventos_id"]; break;
        }
        $upload_handler = new Upload_handler();

    }
}

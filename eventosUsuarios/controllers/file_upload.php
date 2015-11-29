<?php
class file_upload {
    function main($handler){
        error_reporting(E_ALL | E_STRICT);
        include_once('./models/account/gallery_info.php');
        require_once('./functions/upload_handler.php');
        require_once('./functions/account/user_gallery.php');
        switch($handler){
            case "Account":
                $_SESSION["dir"] = $handler."/".$_SESSION["usuarios_id"];
                $user_gallery = new user_gallery();
                break;
            case "Manage_events":
                $_SESSION["dir"] = $handler."/".$_SESSION["eventos_id"];
                $upload_handler = new Upload_handler();
                break;
        }
    }
}

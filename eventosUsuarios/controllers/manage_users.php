<?php
class manage_users {
    function main(){
        return View("manage_users/main");
    }
    function get_list(){       
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
            include_once("./functions/manage_users/mainlist.php");
            $main = new Mainlist();
            $main->get_list($_POST);
        }
    }
}

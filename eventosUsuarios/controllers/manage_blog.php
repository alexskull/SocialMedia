<?php

class Manage_blog {
    function main(){
        return View("manage_blog/main");
    }
    function edit(){
        return View("manage_blog/edit");
    }
    function edit_post(){
        include_once("./functions/manage_blog/edit.php");
            $main = new Edit();
            $main->edit_post($_POST);
    }
}

<?php

class Account {
    public function main(){
        return View("account/main");
    } 
    public function gallery(){
        return View("account/gallery");
    }
    public function file_upload(){
        include ("models/file_upload.php");
        $file = new File_upload();
        $file->id = $_SESSION["usuarios_id"];
        return View ("file_upload/main", $file);
    }
    public function favs(){
        return View("account/favs");
    }
}

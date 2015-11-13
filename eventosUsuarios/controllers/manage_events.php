<?php
include_once("models/manage_events/event.php");
class manage_events {
    function main(){
        return View("manage_events/main");
    }
    function edit(){
        return View("manage_events/edit", new Event());
    }
    function new_gallery(){
        $event = new Event();
        $event->info = false;
        return View("manage_events/new_gallery", $event);
    }    
    public function status(){
        return View("manage_events/status");
    } 
    public function file_upload(){
        include ("models/file_upload.php");
        $file = new File_upload();
        $file->id = $_SESSION["usuarios_id"];
        return View ("file_upload/main", $file);
    }
}

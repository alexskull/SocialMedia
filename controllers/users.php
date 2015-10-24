<?php
class Users {    
    public function signin(){
        return View("users/signin");
    }
    public function signup(){
        return View("users/signup");
    }
    public function recover(){
        include_once("models/users/recover.php");
        $recover = new Recover();
        $recover->recuperar = true;
        return View("users/recover", $recover);
    }
    public function activate(){
        include_once("models/users/recover.php");
        $recover = new Recover();
        $recover->recuperar = false;
        return View("users/recover", $recover);
    }
    public function profile(){
        return View("users/profile");
    }
}

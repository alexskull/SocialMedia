<?php
include_once("models/mailbox/maillist.php");

class Mailbox {
    public function main(){
        $maillist = new Maillist();
        $maillist->recibidos = true;
        return View("mailbox/main", $maillist);
    } 
    public function inbox(){
        $maillist = new Maillist();
        $maillist->recibidos = true;
        return View("mailbox/main", $maillist);
    } 
    public function sent(){
        $maillist = new Maillist();
        $maillist->recibidos = false;
        return View("mailbox/main", $maillist);
    } 
    public function compose(){
        return View("mailbox/compose", new Maillist());
    } 
    public function email(){
        return View("mailbox/email", new Maillist());
    }
}

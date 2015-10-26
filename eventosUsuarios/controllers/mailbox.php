<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mailbox
 *
 * @author Louise
 */
class Mailbox {
    public function main(){
        include_once("models/mailbox/maillist.php");
        $maillist = new Maillist();
        $maillist->recibidos = true;
        return View("mailbox/main", $maillist);
    } 
    public function inbox(){
        include_once("models/mailbox/maillist.php");
        $maillist = new Maillist();
        $maillist->recibidos = true;
        return View("mailbox/main", $maillist);
    } 
    public function sent(){
        include_once("models/mailbox/maillist.php");
        $maillist = new Maillist();
        $maillist->recibidos = false;
        return View("mailbox/main", $maillist);
    } 
    public function compose(){
        return View("mailbox/compose");
    } 
    public function email(){
        return View("mailbox/email");
    }
}

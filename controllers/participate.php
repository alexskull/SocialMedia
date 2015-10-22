<?php
class Participate {
    function review(){
        return View("participate/review");
    }
    function details(){
        return View("participate/details");
    }
    function complete(){
        return View("participate/complete");
    }
    function error(){
        return View("participate/error");
    }
    function invoice(){
        return View("participate/invoice");
    }
}

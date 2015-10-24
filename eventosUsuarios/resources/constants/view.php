<?php
class View {
    public $model, $title, $body, $view, $lang;
    
    function __construct($lang) {
        $this->model = new stdClass();
        $this->title = "";
        $this->lang = $lang;
    }
    function set_view($obj, $view = null, $model = null){
        $this->view = $view;
        if (isset($model)){
            $this->model->$obj = $model;
        }
        $this->body = new stdClass();
    }
    function set_model($obj, $model = null){
        if (isset($model)){
            $this->model->$obj = $model;
        }
    }
    function load_elements($uri){
        $flag   = true;

        if(count($uri)>Settings::URL_SLASHES) $flag = false;  
        else {
            $controller = $uri[Settings::URL_SLASHES-3];
            if ($controller == "") $controller = "principal";
            if (!file_exists("./controllers/$controller.php")) {
                return false; 
            }
            else {
                include_once("./controllers/$controller.php");
                $controller = ucfirst($controller);
                $controller_class = new $controller();
                $action = isset($uri[Settings::URL_SLASHES-2]) ? $uri[Settings::URL_SLASHES-2] : false;
                $id = null;
                 
                if ($action == false ){
                    $action = Settings::MAIN_ACTION;
                }
                else {                   
                    if (method_exists($controller_class, $action)){
                        $id = isset($uri[Settings::URL_SLASHES-1]) ? $uri[Settings::URL_SLASHES-1] : false;
                    }
                    else {
                        $action = Settings::MAIN_ACTION;
                        $id = $action;
                    }            
                }              
                
                if (!method_exists($controller_class, $action)){
                    return false;
                }
                
                $response = $controller_class->$action($id);
                $this->set_model($controller, $response->model);
                $include = $response->view == null ? "./views/$action.php": "./views/$response->view.php";  
                
                include($include);
                $layout = null;
                while(isset($this->layout) && $this->layout != $layout) {
                    $layout = $this->layout;
                    if(isset($this->layout)){
                        include($this->layout);
                    }                    
                } 
                
                
                return $include;
            }
        }  
    }
    function load_section($path){
        $path = Settings::HOST_URL.$path;
        $uri  = explode('/', $path);
        $this->load_elements($uri);
    }
}
function View($view = null, $model = null){
    $obj = debug_backtrace();
    $obj = $obj[1]["class"];
    $aux = new View(null);
    $aux->set_view($obj, $view, $model);
    return $aux;
}

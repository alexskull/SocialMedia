<?php
class View {
    public $model, $title, $body, $view, $lang, $session, $active, $section_title, $routing, $collapsed, $header, $controller;
    
    function __construct($lang) {
        $this->model = new stdClass();
        $this->title = "";
        $this->lang = $lang;
        $this->session = decbin($_SESSION["permisos"]);
        $this->active = str_repeat("0", strlen($this->session));
        $this->section_title = "";
        $this->routing = null;
        $this->collapsed = false;
        $this->header = "";
        $this->controller = "";
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
            $this->controller = $obj;
        }
    }
    function load_elements($uri){
        $flag   = true;

        if(count($uri)>Settings::URL_SLASHES+2) $flag = false;  
        else {
            $controller = $uri[Settings::URL_SLASHES];
            if ($controller == "") $controller = "principal";
            if (!file_exists("./controllers/$controller.php")) {
                return false; 
            }
            else {
                include_once("./controllers/$controller.php");
                $controller = ucfirst($controller);
                $controller_class = new $controller();
                $action = isset($uri[Settings::URL_SLASHES+1]) ? $uri[Settings::URL_SLASHES+1] : false;
                
                $explode = explode('?', $action);
                $action = $explode[0];
                
                
                
                $id = null;
                 
                if ($action == false ){
                    $action = Settings::MAIN_ACTION;
                }
                else {                   
                    if (method_exists($controller_class, $action)){
                        $id = isset($uri[Settings::URL_SLASHES+2]) ? $uri[Settings::URL_SLASHES+2] : false;
                        
                        if ($id != false) {
                            $explode = explode("?", $id);
                            if (isset($explode)){
                                $query =  parse_str ($id[1]);
                                $id = isset($explode[0])? array_merge(array("action" => $id[0]), $query): $query;
                                
                            }
                        }
                    }
                    else {                        
                        $id = $action;
                        $action = Settings::MAIN_ACTION;
                    }            
                }  
                if (!method_exists($controller_class, $action)){
                    return false;
                }                
                $response = $controller_class->$action($id);
                if (is_a($response, "View")){
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
                    return true;
                }
                else {
                    return true;
                }
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

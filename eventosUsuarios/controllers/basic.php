<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of basic
 *
 * @author Louise
 */
class Basic {
    function main(){
        return View("basic/main");
    }
    function obtener_subcategorias($data){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            $data = $_POST;
            
            $url = "vista-subcategoria?id_categoria=".$data["id_categoria"];
            $res = json_decode(Util::call_API("GET", $url));
            $res = isset($res) ? $res->_embedded->eventos_sub_categorias : false;
            echo json_encode($res);
            return true;
        } else return 400;
    }
    function obtener_localizaciones($data){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            $data = $_POST;
            $url = null;
            switch($data["tabla"]){ 
                case "ciudad": $url = "vista-estado-ciudad?estado_id=".$data["estado"]; break;
                case "estado": $url = "vista-pais-estado?pais_id=".$data["pais"]; break;
                case "pais" : $url = "lugar_pais"; break;
            }
            $res = json_decode(
                Util::call_API("GET", $url));
            if (isset($res)){
                switch($data["tabla"]){ 
                    case "ciudad": $res = $res->_embedded->lugar_ciudad;break;
                    case "estado": $res = $res->_embedded->lugar_estado;break;
                    case "pais": $res = $res->_embedded->lugar_pais; break;
                }
            } else $res = false;
            echo json_encode($res);
            return true;
        } else return 400;
    }
    function gestionar_localizaciones($data){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            $data = $_POST;
            $tabla = $data["tabla"];
            if (isset($data["descripcion"])){     
                if (isset($data[$tabla]) && $data[$tabla] != ""){
                    $json = new stdClass();
        
                    $json->descripcion = $data["descripcion"];
                    if ($tabla == "estado" || $tabla == "ciudad"){
                        $id = $tabla == "estado" ? "pais" : "estado";
                        $valor = $data[$id];
                        $id = $id."_id";
                        
                        $json->$id = $valor;                        
                    }
                    $url = "lugar_".$tabla."/".$data[$tabla];
                    $json = json_encode($json);
                    $res = json_decode(
                        Util::call_API("PATCH", $url, $json));
                    echo json_encode(true);
                } else {
                    $json = new stdClass();
        
                    $json->descripcion = $data["descripcion"];
                    if ($tabla == "estado" || $tabla == "ciudad"){
                        $id = $tabla == "estado" ? "pais" : "estado";
                        $valor = $data[$id];
                        $id = $id."_id";
                        
                        $json->$id = $valor;                        
                    }
                    $url = "lugar_".$tabla;
                    $json = json_encode($json);
                    $res = json_decode(
                        Util::call_API("POST", $url, $json));
                    echo json_encode(true);
                    
                }                
            }
            else {
                $url = "lugar_".$tabla."/".$data[$tabla];
                $res = json_decode(
                Util::call_API("DELETE", $url));
            }   
            return true;
        } else return 400;
    }
    function gestionar_categorias(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            $data = $_POST;
            $json = new stdClass();
            $json->id_categoria = $data["id_categoria"];
            if (isset($data["id_sub_categoria"]) && $data["id_sub_categoria"] != ""){
                $url = "eventos_sub_categorias/".$data["id_sub_categoria"];
                
                if (isset($data["nombre_sub_categoria"])){
                    $json->nombre_sub_categoria = $data["nombre_sub_categoria"];
                    $json = json_encode($json);
                    
                    
                    $res = json_decode(
                        Util::call_API("PATCH", $url, $json));
                }
                else {
                    $res = json_decode(
                        Util::call_API("DELETE", $url));
                }
                echo json_encode(true);
            } else {
                $url = "eventos_sub_categorias";
                $json->nombre_sub_categoria = $data["nombre_sub_categoria"];
                $json = json_encode($json);
                $res = json_decode(
                        Util::call_API("POST", $url, $json));
                echo json_encode(true);
            }
            return true;
        } else return 400;
    }
}

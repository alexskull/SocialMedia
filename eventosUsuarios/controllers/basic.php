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
        $json = new stdClass();
        
        $json->nombre_sub_categoria = $data["titulo"];
        //$json->id_categoria = $data["texto"];
        $json->descripcion_sub_categoria = null;
        $json = json_encode($json);
        $res = json_decode(
            Util::call_API("PUT", Settings::WEB_SERVICES_URL."eventos_sub_categorias" , $json));
        $res = $res->_embedded->blog_post;
    }
}

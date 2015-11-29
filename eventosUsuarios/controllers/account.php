<?php

class Account {
    public function main(){
        include ("models/account/account_info.php");
        $account = new Account_info();
        return View("account/main", $account);
    }
    public function gallery(){
        include ("models/account/gallery_info.php");
        $gallery = new Gallery_info();
        return View("account/gallery", $gallery);
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
    public function edit_user(){
        include_once("./functions/account/edit.php");
        include_once("models/account/account_info.php");
        $account = new Account_info();
        $main = new Edit();
        $account->edit_result = $main->edit_user($_POST);
        return View("account/main", $account);
    }
    public function edit_pwd(){
        include_once("./functions/account/edit.php");
        include_once("models/account/account_info.php");
        $account = new Account_info();
        $main = new Edit();
        $account->edit_result = $main->edit_pwd($_POST);
        return View("account/main", $account);
    }
    public function get_subcategorias($id){
        $url = "vista-subcategoria?id_categoria=".$id;
        $res = json_decode(Util::call_API("GET", $url));
        $res = isset($res) ? $res->_embedded->eventos_sub_categorias : false;
        return $res;
    }
    function get_localizaciones($data){
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
        } else json_encode("400");
    }
    public function set_subcategorias(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)) {
            $data = $_POST;

            if( isset($_SESSION["usuarios_id"]) ){
                try{
                    $url = "vista-usuario-subcategorias/".$_SESSION["usuarios_id"];
                    Util::call_API("DELETE", $url);

                    if(is_array($data['subcat'])){
                        foreach($data['subcat'] as $sub_id){
                            $json = new stdClass();
                            $json->usuarios_id = $_SESSION["usuarios_id"];
                            $json->id_sub_categoria = $sub_id;
                            $json = json_encode($json);
                            $url = "usuarios_sub_categorias";
                            Util::call_API("POST", $url, $json);
                        }
                    }
                }catch (Exception $e){
                    echo false;
                    die;
                }
                echo true;
            }else{
                echo false;
            }
        }else{
            echo false;
        }
    }
}

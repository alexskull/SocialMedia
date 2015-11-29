<?php
include_once("models/manage_events/event.php");
class manage_events {
    function main(){
        return View("manage_events/main");
    }
    function edit($id){
        $events = new Event();
        $events->usuarios->ADM = json_encode(json_decode(Util::call_API("GET", "vista-usuarios-x-tipo?rol=ADM"))->_embedded->usuarios);
        $events->usuarios->JDE = json_encode(json_decode(Util::call_API("GET", "vista-usuarios-x-tipo?rol=JDE"))->_embedded->usuarios);
        $events->usuarios->ODE = json_encode(json_decode(Util::call_API("GET", "vista-usuarios-x-tipo?rol=JDE"))->_embedded->usuarios);
        if ($id != false){            
            $res = (array)json_decode(Util::call_API("GET", "vista-evento/$id"));            
            if (!isset($res["status"])){
                $events->exchangeArray($res);

                /*Subcategorias*/
                $url = "vista-subcategoria?id_categoria=$events->id_categoria";
                $res = json_decode(Util::call_API("GET", $url));
                $res = isset($res) ? $res->_embedded->eventos_sub_categorias : false;
                $events->opciones_subcategorias = json_encode($res);
                /*Localizaciones*/
                $url = "vista-estado-ciudad?estado_id=$events->estado_id";
                $res = json_decode(Util::call_API("GET", $url));
                $res = isset($res) ? $res->_embedded->lugar_ciudad : false;
                $events->opciones_ciudad = json_encode($res);

                $url = "vista-pais-estado?pais_id=$events->pais_id";
                $res = json_decode(Util::call_API("GET", $url));
                $res = isset($res) ? $res->_embedded->lugar_estado : false;
                $events->opciones_estado = json_encode($res);

                $url = "lugar_pais";
                $res = json_decode(Util::call_API("GET", $url));
                $res = isset($res) ? $res->_embedded->lugar_pais : false;
                $events->opciones_pais = json_encode($res);
                
                $fecha_evento = explode(" ", $events->fecha_evento);
                $events->fecha_evento = DateTime::createFromFormat('Y-m-d', $fecha_evento[0])->format('d/m/Y');
                $events->hora_evento = $fecha_evento[1]; 
                
                $fecha_fin_evento = explode(" ", $events->fecha_fin_registro);
                $events->fecha_fin_registro = DateTime::createFromFormat('Y-m-d', $fecha_fin_evento[0])->format('d/m/Y');
                $events->hora_fin_registro = $fecha_fin_evento[1]; 

                if (isset($events->recurrencia)){
                    $recurrencia = explode("-", $events->recurrencia);
                    $events->recurrencia = $recurrencia[0];
                    $events->recurrencia_periodo = $recurrencia[1];
                    $events->recurrencia_desde = DateTime::createFromFormat('Y-m-d', $events->recurrencia_desde)->format('d/m/Y');
                    $events->recurrencia_hasta = DateTime::createFromFormat('Y-m-d', $events->recurrencia_hasta)->format('d/m/Y');
                }
            }
            else return $res["status"];
        }
        return View("manage_events/edit", $events);
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
    public function editar_evento($id){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            include_once("functions/manage_events/edit.php");
            $data = $_POST;
            $funcion = new Edit();
            return $funcion->editar_evento($id,$data);             
        }
    }
    public function obtener_listado(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_POST)){
            include_once("functions/manage_events/edit.php");
            $data = $_POST;
            $funcion = new Edit();
            return $funcion->obtener_listado($data);        
        }
    }
}

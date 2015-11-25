<?php
class Events {
    public function main(){
        return View("events/main");
    } 
    public function activity($id){
        if ($id != false){
            include_once("models/events/activity.php");
            $events = new Activity();
            $res = (array)json_decode(Util::call_API("GET", "vista-evento/$id"));            
            $events->exchangeArray($res);
            
            $fecha_evento = explode(" ", $events->fecha_evento);
            $events->fecha_evento = DateTime::createFromFormat('Y-m-d', $fecha_evento[0])->format('d/m/Y');
            $events->hora_evento = $fecha_evento[1]; 

            $fecha_fin_evento = explode(" ", $events->fecha_fin_registro);
            $events->fecha_fin_registro = DateTime::createFromFormat('Y-m-d', $fecha_fin_evento[0])->format('d/m/Y');
            $events->hora_fin_registro = $fecha_fin_evento[1]; 
            return View("events/activity", $events);
        }
        else {
            echo "404";
        }
    } 
}

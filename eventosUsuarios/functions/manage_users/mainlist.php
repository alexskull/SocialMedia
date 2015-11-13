<?php
class Mainlist {
    function get_list($data){
        $res = json_decode(
            Util::call_API("GET", Settings::WEB_SERVICES_URL."usuarios" ));
        $res = $res->_embedded->usuarios;
        
        $totalDisplayRecords = "";
        $totalRecords = "";
        $array = false;
        $i = 0;
        while ($i < count($res)){
            if (strlen($totalRecords) == 0){
                $totalRecords = $res[$i]->filas_totales;
                $totalDisplayRecords = $res[$i]->filas_totales_mostrar;                
            }           
            $array["aaData"][$i] = $res[$i];
            $array["aaData"][$i]["DT_RowId"] = $res[$i]->id_tarifa;
            $array["aaData"][$i]["DT_RowClass"] = "";
            $i++;
        }        
        
        if (strlen($totalRecords) == 0){
            $array["sEcho"] = $data["draw"];
            $array["iTotalRecords"] = 0;
            $array["iTotalDisplayRecords"] = 0;
            $array["aaData"] = array();
            
            return $array;
        }
        
        $array["sEcho"] = $data["draw"];
        $array["iTotalRecords"] = $totalRecords;
        $array["iTotalDisplayRecords"] = $totalDisplayRecords;
        
        return $array;
    }
}

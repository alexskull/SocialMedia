<?php
namespace evt\V1\Rest\VistaPaisEstado;

class VistaPaisEstadoEntity
{
    public $estado_id;
    public $pais_id;
    public $descripcion;
 
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
 
    public function exchangeArray(array $array)
    {
        foreach ($array as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
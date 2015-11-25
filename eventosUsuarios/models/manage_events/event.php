<?php
class Event {
    public $info;
    public $usuarios;
    public $opciones_subcategorias;
    public $opciones_ciudad;
    public $opciones_estado;
    public $opciones_pais;
    
    public $event_id;
    public $event_name;
    public $event_description;
    public $event_summary;
    public $id_categoria;
    public $nombre_categoria;
    public $id_sub_categoria;
    public $nombre_sub_categoria;
    public $fecha_evento;
    public $hora_evento;
    public $fecha_fin_registro;
    public $hora_fin_registro;
    public $recurrencia;
    public $recurrencia_periodo;
    public $recurrencia_desde;
    public $recurrencia_hasta;
    public $direccion;
    public $lugar_encuentro;
    public $ciudad_id;
    public $ciudad;
    public $estado_id;
    public $estado;
    public $pais_id;
    public $pais;
    public $aforo;
    public $plazas;
    public $precio;
    public $usuario_organizador;
    public $nombre_organizador;
    public $jurado;
    public $edad_recomendada;
    public $sexo_recomendado;
    public $permite_comentarios;
    public $terminos_condiciones;
    public $creado_en;
    public $pagina_web;
    public $mostrar_comentarios;
    public $mostrar_inscritos;
    public $latitud;
    public $longitud;
    
    function __construct() {
        $this->info = true;
        $this->usuarios = new stdClass();
        $this->opciones_subcategorias = "";
        $this->opciones_ciudad = "";
        $this->opciones_estado = "";
        $this->opciones_pais = "";
        
        $this->event_name = "";
        $this->event_description = "";
        $this->event_summary = "";
        $this->id_categoria = "";
        $this->nombre_categoria = "";
        $this->id_sub_categoria = "";
        $this->nombre_sub_categoria = "";
        $this->fecha_evento = "";
        $this->hora_evento = "";
        $this->fecha_fin_evento = "";
        $this->hora_fin_evento = "";      
        $this->recurrencia = "";
        $this->recurrencia_periodo = "";
        $this->recurrencia_desde = "";
        $this->recurrencia_hasta = "";
        $this->direccion = "";
        $this->lugar_encuentro = "";
        $this->ciudad_id = "";
        $this->ciudad = "";
        $this->estado_id = "";
        $this->estado = "";
        $this->pais_id = "";
        $this->pais = "";
        $this->aforo = "";
        $this->plazas = "";
        $this->precio = "";
        $this->usuario_organizador = "";
        $this->nombre_organizador = "";
        $this->jurado = "";
        $this->edad_recomendada = "";
        $this->sexo_recomendado = "";
        $this->permite_comentarios = "";
        $this->terminos_condiciones = "";
        $this->creado_en = "";
        $this->pagina_web = "";
        $this->mostrar_comentarios = "";
        $this->mostrar_inscritos = "";
        $this->latitud = "";
        $this->longitud = "";
    }
    
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

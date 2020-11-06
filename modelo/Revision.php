<?php

class Revision{
    
    private $id;
    private $estado;
    private $fecha;


    public function getId(){
        return $this->id;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

}
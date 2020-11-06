<?php

class Empleado{
    
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $revisiones;

    public function getRevisiones(){
        return $this->revisiones;
    }

    
    public function getIdentificacion(){
        return $this->identificacion;
    }
    
    public function getNombres(){
        return $this->nombres;
    }
    
    public function getApellidos(){
        return $this->apellidos;
    }
    
    public function setRevisiones($revisiones){
        $this->revisiones = $revisiones;
    }

    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

}
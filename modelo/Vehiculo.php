<?php

class Vehiculo{

    private $id;
    private $volumen;
    private $tipoCombustible;
    private $cantidadCilindros;
    private $estado;

    public function getEstado(){
        return $this->estado;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getVolumen(){
        return $this->volumen;
    }
    
    public function getTipoCombustible(){
        return $this->tipoCombustible;
    }
    
    public function getCantidadCilindros(){
        return $this->cantidadCilindros;
    }
    
    public function setEstado($estado){
        $this->estado = $estado;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setVolumen($volumen){
        $this->volumen = $volumen;
    }

    public function setTipoCombustible($tipoCombustible){
        $this->tipoCombustible=$tipoCombustible;
    }

    public function setCantidadCilindros($cantidadCilindros){
        $this->cantidadCilindros = $cantidadCilindros;
    }

}
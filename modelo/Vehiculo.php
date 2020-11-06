<?php

class Vehiculo{

    private $id;
    private $volumen;
    private $tipoCombustible;
    private $cantidadCilindros;

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

    public function setId($id){
        $this->id = $id;
    }

    public function setVolumen($volumen){
        $this->volumen = $volumen;
    }

    public function setTipoCombustible(){
        $this->tipoCombustible=$tipoCombustible;
    }

    public function setCantidadCilindros(){
        $this->cantidadCilindros = $cantidadCilindros;
    }

}
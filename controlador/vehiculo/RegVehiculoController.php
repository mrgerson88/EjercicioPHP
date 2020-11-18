<?php

class RegVehiculoController{
    
    public function registro() {
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }

    private function regVehiculo($vehiculo){
        $vehiculo->setVolumen($_GET["volumen"]);
        $vehiculo->setTipoCombustible($_GET["tipoCombustible"]);
        $vehiculo->setCantidadCilindros($_GET["cantidadCilindros"]);
    }

    public function registrar(){
        if($_GET["cantidadPuertas"]){
            $automovil = new Automovil();
            $automovil->setCantidadPuertas($_GET["cantidadPuertas"]);
            $this->regVehiculo($automovil);
            AutomovilService::registrarAutomovil($automovil);
        }
        if($_GET["capacidadCarga"]){
            $furgoneta = new Furgoneta();
            $furgoneta->setCapacidadCarga($_GET["capacidadCarga"]);
            $this->regVehiculo($furgoneta);
            FurgonetaService::registrarFurgoneta($furgoneta);
        }
        if($_GET["cantidadPasajeros"]){
            $van = new Van();
            $van->setCantidadPasajeros($_GET["cantidadPasajeros"]);
            $this->regVehiculo($van);
            VanService::registrarVan($van);
        }
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }
    
}
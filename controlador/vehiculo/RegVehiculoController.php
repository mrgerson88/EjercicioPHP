<?php

class RegVehiculoController{
    
    public function registro() {
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }

    private function regVehiculo($vehiculo){
        $vehiculo->setVolumen(filter_input(INPUT_POST, "volumen"));
        $vehiculo->setTipoCombustible(filter_input(INPUT_POST, "tipoCombustible"));
        $vehiculo->setCantidadCilindros(filter_input(INPUT_POST,"cantidadCilindros"));
    }

    public function registrar(){
        if(filter_input(INPUT_POST,"cantidadPuertas")){
            $automovil = new Automovil();
            $automovil->setCantidadPuertas(filter_input(INPUT_POST,"cantidadPuertas"));
            $this->regVehiculo($automovil);
            AutomovilService::registrarAutomovil($automovil);
        }
        if(filter_input(INPUT_POST,"capacidadCarga")){
            $furgoneta = new Furgoneta();
            $furgoneta->setCapacidadCarga(filter_input(INPUT_POST, "capacidadCarga"));
            $this->regVehiculo($furgoneta);
            FurgonetaService::registrarFurgoneta($furgoneta);
        }
        if(filter_input(INPUT_POST, "cantidadPasajeros")){
            $van = new Van();
            $van->setCantidadPasajeros(filter_input(INPUT_POST,"cantidadPasajeros"));
            $this->regVehiculo($van);
            VanService::registrarVan($van);
        }
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }
    
}
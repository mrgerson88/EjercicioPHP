<?php

class RegVehiculoController{
    
    private static $vehiculoService;
    public function RegVehiculoController(){
        self::$vehiculoService = new VehiculoService();
    }

    public function registro() {
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }

    public function registrar(){
        if($_GET["cantidadPuertas"]){
            $automovil = new Automovil();
            $automovil->setCantidadPuertas($_GET["cantidadPuertas"]);
            $automovil->setVolumen($_GET["volumen"]);
            $automovil->setTipoCombustible($_GET["tipoCombustible"]);
            $automovil->setCantidadCilindros($_GET["cantidadCilindros"]);
            self::$vehiculoService->registrar($automovil,"automovil");
        }elseif($_GET["capacidadCarga"]){
            $automovil = new Furgoneta();
            $automovil->setCapacidadCarga($_GET["capacidadCarga"]);
            $automovil->setVolumen($_GET["volumen"]);
            $automovil->setTipoCombustible($_GET["tipoCombustible"]);
            $automovil->setCantidadCilindros($_GET["cantidadCilindros"]);
            self::$vehiculoService->registrar($automovil,"furgoneta");
        }elseif($_GET["cantidadPasajeros"]){
            $automovil = new Van();
            $automovil->setCantidadPasajeros($_GET["cantidadPasajeros"]);
            $automovil->setVolumen($_GET["volumen"]);
            $automovil->setTipoCombustible($_GET["tipoCombustible"]);
            $automovil->setCantidadCilindros($_GET["cantidadCilindros"]);
            self::$vehiculoService->registrar($automovil,"van");
        }
        Template::render(
            DIR_VIEW . "regvehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }
    
    
}
<?php

class VehiculoController{
    
    private static $vehiculo;

    public function __construct(){
        self::$vehiculo = new VehiculoService(); 
    }
    
    
    public function registro() {
        Template::render(
            DIR_VIEW . "vehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }


    //setea los atributos compartidos para cada registro
    private static function setPropCompartidas($vehiculo){
        $vehiculo->setVolumen(filter_input(INPUT_POST, "volumen"));
        $vehiculo->setTipoCombustible(filter_input(INPUT_POST, "tipoCombustible"));
        $vehiculo->setCantidadCilindros(filter_input(INPUT_POST,"cantidadCilindros"));
        $vehiculo->setEstado(filter_input(INPUT_POST,"estado"));
    }

    //registra dependiendo del tipo de vehiculo
    public function registrar(){

        $tipoAuto = filter_input(INPUT_POST,"tipoAuto");

        switch ($tipoAuto) {
            case 'automovil':
                $automovil = new Automovil();
                $automovil->setCantidadPuertas(filter_input(INPUT_POST,"cantidadPuertas"));
                self::setPropCompartidas($automovil);
                self::$vehiculo->registrar($automovil,"automovil","numPuertas","getCantidadPuertas");
                break;
            case 'furgoneta':
                $furgoneta = new Furgoneta();
                $furgoneta->setCapacidadCarga(filter_input(INPUT_POST,"capacidadCarga"));
                self::setPropCompartidas($furgoneta);
                self::$vehiculo->registrar($furgoneta,"furgoneta","capCarga","getCapacidadCarga");
                break;
            case 'van':
                $van = new Van();
                $van->setCantidadPasajeros(filter_input(INPUT_POST,"cantidadPasajeros"));
                self::setPropCompartidas($van);
                self::$vehiculo->registrar($van,"van","numPasajeros","getCantidadPasajeros");
                break;
        }
        Template::render(
            DIR_VIEW . "vehiculo/registro.php",
            ["titulo"=>"Registro Vehiculo"]
        );
    }
    
    //listar van
    public function listar(){
        
        $action = filter_input(INPUT_POST,"action");
        $lista  = [];
        $attr = "";
        $titulo = "";
        switch ($action) {
            case 'van':
                $attr = "numPasajeros";
                $titulo = "Numero pasajeros";
                $lista = self::$vehiculo->listar($action,$attr);
                break;
            case 'automovil':
                $attr = "numPuertas";
                $titulo = "Numero puertas";
                $lista = self::$vehiculo->listar($action,$attr);
                break;
            case 'furgoneta':
                $attr = "capCarga";
                $titulo = "Capacidad Carga";
                $lista = self::$vehiculo->listar($action,$attr);
                break;
        }
        
        
        Template::render(
            DIR_VIEW . "vehiculo/lista.php",
            ["titulo"=>"Lista","lista"=>$lista,"attrPropio"=>$attr,"titulo"=>$titulo]
        );
    }
}
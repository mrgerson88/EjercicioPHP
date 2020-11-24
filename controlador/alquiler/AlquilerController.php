<?php

class AlquilerController{

    private static $cliente;
    private static $vehiculos;
    private static $alquiler;

    public function __construct(){
        self::$cliente = new ClienteService();
        self::$vehiculos = new VehiculoService();
        self::$alquiler = new AlquilerService();
    }
    
    public function registro(){
        $listaClientes = self::$cliente->listarClientes();
        $listaVehiculos = self::$vehiculos->listarVehiculos(2);
        Template::render(
            DIR_VIEW . "alquiler/alquiler.php", 
            ["listaVehiculos"=>$listaVehiculos,
            "listaclientes"=>$listaClientes,
            "titulo"=>"Alquiler Vehiculo"]
        );
    }

    public function registrar(){
        $contrato = new Contrato();
        $contrato->setFechaEntrega(filter_input(INPUT_POST,"fecha"));
        $contrato->setLugarEntrega(filter_input(INPUT_POST,"lugarEntrega"));
        $contrato->setFianza(filter_input(INPUT_POST,"fianza"));
        $idCliente = filter_input(INPUT_POST,"cliente");
        $idVehiculo = filter_input(INPUT_POST,"vehiculo");
        $estado = filter_input(INPUT_POST,"estado-alquiler"); 
        self::$alquiler->regAlquiler($contrato,$idCliente,$idVehiculo,$estado);
        $listaClientes = self::$cliente->listarClientes();
        $listaVehiculos = self::$vehiculos->listarVehiculos(2);
        Template::render(
            DIR_VIEW . "alquiler/alquiler.php", 
            ["listaVehiculos"=>$listaVehiculos,
            "listaclientes"=>$listaClientes,
            "titulo"=>"Alquiler Vehiculo"]
            
        );
    }   

    public function listar(){
        $accion = filter_input(INPUT_POST,"action");
        $listaVehiculos;
        switch ($accion) {
            case 'Alquilados':
                $listaVehiculos = self::$vehiculos->listarVehiculos(4);
                $titulo = "Vehículos Alquilados";
            break;
            case 'Reservados':
                $listaVehiculos = self::$vehiculos->listarVehiculos(3);
                $titulo = "Vehículos Reservados";
            break;
        }
        Template::render(
            DIR_VIEW . "alquiler/alquilados.php", 
            ["listaVehiculos"=>$listaVehiculos,            
            "titulo"=>$titulo]
        );
    }

    // public function devolucion(){
    //     $contrato = new Contrato();
    //     $contrato->setFechaDevolucion(filter_input(INPUT_POST,"fecha"));
    //     $contrato->setLugarDevolucion(filter_input(INPUT_POST,"lugarDevolucion"));
    //     $contrato->setSaldo(filter_input(INPUT_POST,"saldo"));     
    //     self::$alquiler->devolucion($contrato);        
    //     Template::render(
    //         DIR_VIEW . "alquiler/alquilados.php",            
    //         ["devolucion"=>$alquiler, 
    //         "titulo"=>"Alquiler Vehiculo"]
            
    //     );
    // }   


}
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
                $listaVehiculos = self::$alquiler->listarVehiculosAlquilados(4);
                $titulo = "Vehículos Alquilados";
            break;
            case 'Reservados':
                $listaVehiculos = self::$alquiler->listarVehiculosAlquilados(3);
                $titulo = "Vehículos Reservados";
            break;
        }
        Template::render(
            DIR_VIEW . "alquiler/alquilados.php", 
            ["listaVehiculos"=>$listaVehiculos,            
            "titulo"=>$titulo]
        );
    }


}
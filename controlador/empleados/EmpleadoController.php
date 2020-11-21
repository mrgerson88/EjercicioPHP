<?php

class EmpleadoController{

    private static $empleado;
    private static $revision;
    
    public function __construct(){
        self::$empleado = new EmpleadoService();
        self::$revision = new RevisionService();
        // self::$reg_vehiculo = new RevisionService(); 
    }

    public function listEmpleados(){        
        $listaEmpleados = self::$empleado->listarEmpl();
        Template::render(
            DIR_VIEW . "empleados/lista.php",
            ["listaempleados"=>$listaEmpleados,
            "titulo"=>"Lista Empleados"]
        );
    }

    public function listRevEmpleados(){
        $idEmpleado = filter_input(INPUT_POST,"idEmpleado");
        $listaRevEmp = self::$revision->revisionPorEmpleado($idEmpleado);
        $listaEmpleados = self::$empleado->listarEmpl();
        Template::render(
            DIR_VIEW . "empleados/lista.php",
            ["listaRevEmp"=>$listaRevEmp,
            "listaempleados"=>$listaEmpleados,
            "titulo"=>"Lista Empleados"
            ]
        );
    }

    // public function RegEmpleados(){

    // }

}
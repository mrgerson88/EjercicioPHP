<?php

class EmpleadoService{

    public function listarEmpl(){
        $listaEmpleados = [];
        $pdo = ConexionBD::getPDO();
        $stm = $pdo->prepare(
            "SELECT * FROM empleados"
        );
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_ASSOC)){
                array_push($listaEmpleados,$fila);
            }
        }
        return $listaEmpleados;
    }

    // public function regEmpleado(){
    //     $pdo = ConexionBD::getPDO();
    //     $stm = $pdo->prepare(
    //         "INSERT INTO empleados (nombre) VALUES (:nombre)"
    //     );        
    //     $stm->bindValue(":nombre",$nombre,PDO::PARAM_STR);
    //     $stm->execute();
    // }
}
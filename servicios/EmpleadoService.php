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

}
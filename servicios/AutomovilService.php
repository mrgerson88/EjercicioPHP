<?php

class AutomovilService{
    
    public static function registrarAutomovil($automovil){
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $lastId = VehiculoService::registrar($automovil);
        $cantidadPuertas = $automovil->getCantidadPuertas();
        $stm = $pdo->prepare("INSERT INTO automovil(
            numPuertas,
            idvehiculo
            )VALUES (:numPuertas,:idVehiculo)");
        $stm->bindParam(":numPuertas",$cantidadPuertas,PDO::PARAM_INT);
        $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
        $estado = $stm->execute();
        $pdo->commit();
        return $estado;
    }
}
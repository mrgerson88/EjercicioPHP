<?php

class FurgonetaService{
    
    public static function registrarFurgoneta($furgoneta){
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $lastId = VehiculoService::registrar($furgoneta);
        $capCarga = $furgoneta->getCapacidadCarga();
        $stm = $pdo->prepare("INSERT INTO furgoneta(
            capCarga,
            idvehiculo
            )VALUES (:capCarga,:idVehiculo)");
        $stm->bindParam(":capCarga",$capCarga,PDO::PARAM_INT);
        $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
        $estado = $stm->execute();
        $pdo->commit();
        return $estado;
    }
}
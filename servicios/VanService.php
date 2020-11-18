<?php

class VanService{
    public static function registrarVan($van){
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $lastId = VehiculoService::registrar($van);
        $numPasajeros = $van->getCantidadPasajeros();
        $stm = $pdo->prepare("INSERT INTO van(
            numPasajeros,
            idvehiculo
            )VALUES (:numPasajeros,:idVehiculo)");
        $stm->bindParam(":numPasajeros",$numPasajeros,PDO::PARAM_INT);
        $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
        $estado = $stm->execute();
        $pdo->commit();
        return $estado;
    }
}

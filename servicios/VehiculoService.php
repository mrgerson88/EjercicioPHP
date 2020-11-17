<?php

class VehiculoService{
    
    public function registrar($vehiculo,$tipoVehiculo){
        $volumen = $vehiculo->getVolumen();
        $tipoCombustible = $vehiculo->getTipoCombustible();
        $cantidadCilindros = $vehiculo->getCantidadCilindros();
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $stm = $pdo->prepare("INSERT INTO vehiculo(
            volumen, 
            tipoCombustible, 
            cantCilindros)
        VALUES (:volumen, :tipoCombustible, :cantCilindros)");
        $stm->bindParam(":volumen",$volumen,PDO::PARAM_INT);
        $stm->bindParam(":tipoCombustible", $tipoCombustible,PDO::PARAM_STR,45);
        $stm->bindParam(":cantCilindros",$cantidadCilindros,PDO::PARAM_INT);
        
        $stm->execute();
        
        $lastId = $pdo->lastInsertId();

        if($tipoVehiculo=="automovil"){
            $cantidadPuertas = $vehiculo->getCantidadPuertas();
            $stm = $pdo->prepare("INSERT INTO automovil(numPuertas,idvehiculo)
            VALUES (:numPuertas,:idVehiculo)");
            $stm->bindParam(":numPuertas",$cantidadPuertas,PDO::PARAM_INT);
            $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
            $estado = $stm->execute();
            $pdo->commit();
            return $estado;
        }elseif($tipoVehiculo=="furgoneta"){
            $capCarga = $vehiculo->getCapacidadCarga();
            $stm = $pdo->prepare("INSERT INTO furgoneta(capCarga,idvehiculo)
            VALUES (:capCarga,:idVehiculo)");
            $stm->bindParam(":capCarga",$capCarga,PDO::PARAM_INT);
            $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
            $estado = $stm->execute();
            $pdo->commit();
            return $estado;
        }elseif($tipoVehiculo=="van"){
            $cantidadPasajeros = $vehiculo->getCantidadPasajeros();
            $stm = $pdo->prepare("INSERT INTO van(numPasajeros,idvehiculo)
            VALUES (:numPasajeros,:idVehiculo)");
            $stm->bindParam(":numPasajeros",$cantidadPasajeros,PDO::PARAM_INT);
            $stm->bindParam(":idVehiculo",$lastId,PDO::PARAM_INT);
            $estado = $stm->execute();
            $pdo->commit();
            return $estado;
        }

    }

}

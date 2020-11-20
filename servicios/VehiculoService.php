<?php

class VehiculoService implements IVehiculoService{

    public function registrar($vehiculo,$tipoVehiculo,$attrPropio,$getAttr){
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $stm = $pdo->prepare(
            "INSERT INTO vehiculo(volumen,tipoCombustible,cantCilindros,estado)
            VALUES (:volumen, :tipoCombustible, :cantCilindros,:estado)"
        );
        $stm->bindValue(":volumen",$vehiculo->getVolumen(),PDO::PARAM_INT);
        $stm->bindValue(":tipoCombustible",$vehiculo->getTipoCombustible(),PDO::PARAM_STR);
        $stm->bindValue(":cantCilindros",$vehiculo->getCantidadCilindros(),PDO::PARAM_INT);
        $stm->bindValue(":estado",$vehiculo->getEstado(),PDO::PARAM_INT);

        $stm->execute();

        $lastId = $pdo->lastInsertId();
        $stm = $pdo->prepare(
            "INSERT INTO $tipoVehiculo($attrPropio,idvehiculo)
            VALUES (:$attrPropio,:idVehiculo)"
        );

        $stm->bindValue(":$attrPropio",$vehiculo->$getAttr(),PDO::PARAM_INT);
        $stm->bindValue(":idVehiculo",$lastId,PDO::PARAM_INT);
        $stm->execute();
        $pdo->commit();
    }

    public function listar($tipoVehiculo,$attr){
        $listaVehiculos = [];
        $pdo = ConexionBD::getPDO();
        $stm = $pdo->prepare(
            "SELECT vehiculo.idvehiculo,
                vehiculo.tipoCombustible,
                vehiculo.cantCilindros,
                vehiculo.volumen,
                $tipoVehiculo.$attr
            FROM vehiculo 
            INNER JOIN $tipoVehiculo ON vehiculo.idvehiculo = $tipoVehiculo.idvehiculo"
        );
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_ASSOC)){
                array_push($listaVehiculos,$fila);
            }
        }
        return $listaVehiculos;
    }

    public function listarVehiRev(){
        $listaVehiculos = [];
        $pdo = ConexionBD::getPDO();
        $stm = $pdo->prepare(
            "SELECT * FROM vehiculo WHERE estado = 1"
        );
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_ASSOC)){
                array_push($listaVehiculos,$fila);
            }
        }
        return $listaVehiculos;
    }

}

<?php

class VehiculoService{

    public static function registrar($vehiculo){
        $volumen = $vehiculo->getVolumen();
        $tipoCombustible = $vehiculo->getTipoCombustible();
        $cantidadCilindros = $vehiculo->getCantidadCilindros();
        $pdo = ConexionBD::getPDO();
        $stm = $pdo->prepare("INSERT INTO vehiculo(
            volumen, 
            tipoCombustible, 
            cantCilindros)
        VALUES (:volumen, :tipoCombustible, :cantCilindros)");
        $stm->bindParam(":volumen",$volumen,PDO::PARAM_INT);
        $stm->bindParam(":tipoCombustible", $tipoCombustible,PDO::PARAM_STR,45);
        $stm->bindParam(":cantCilindros",$cantidadCilindros,PDO::PARAM_INT);
        $stm->execute();
        return $pdo->lastInsertId();
    }

}

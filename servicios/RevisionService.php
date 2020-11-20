<?php

class RevisionService{


    public function regRevision($idEmpleado,$idVehiculo){
        $pdo = ConexionBD::getPDO();
        $pdo->beginTransaction();
        $stm = $pdo->prepare(
            "INSERT INTO revisiones (idempleados) VALUES (:idEmpleado)"
        );
        $stm->bindValue(":idEmpleado",$idEmpleado,PDO::PARAM_INT);

        $stm->execute();
        
        $stm = $pdo->prepare(
            "UPDATE vehiculo SET estado = 2 WHERE idvehiculo = :idVehiculo"
        );
        $stm->bindValue(":idVehiculo",$idVehiculo,PDO::PARAM_INT);
        $stm->execute();
        $pdo->commit();

    }

}

<h3 class="mt-2"><?= $data["titulo"]?></h3>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Fecha Entrega</th>
        <th>Fianza</th>
        <th>Marca</th>        
        <th>Estado</th>        
    </thead>
    <?php foreach($data["listaVehiculos"] as $vehiculo){ ?>
    <tr>
        <td><?= ucfirst($vehiculo["fecha_entrega"]) ?></td>
        <td><?= ucfirst($vehiculo["fianza"]) ?></td>
        <td><?= $vehiculo["marca"]?></td>                
        <td>
            <button data-toggle="modal" data-target="#reg-devolucion" class="mb-3 btn btn-dark" >Registrar Devolución</button>
        </td>
    </tr>
    <?php } ?>
</table>
<?php include("registro.php") ?>


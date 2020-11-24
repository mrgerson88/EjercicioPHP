<h3 class="mt-2"><?= $data["titulo"]?></h3>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Marca</th>
        <th>Tipo combustible</th>
        <th>Cantidad cilindros</th>
        <th>Volumen</th>
        <th>Estado</th>        
    </thead>
    <?php foreach($data["listaVehiculos"] as $vehiculo){ ?>
    <tr>
    <td><?= ucfirst($vehiculo["marca"]) ?></td>
        <td><?= ucfirst($vehiculo["tipoCombustible"]) ?></td>
        <td><?= $vehiculo["cantCilindros"]?></td>
        <td><?= $vehiculo["volumen"]?></td>        
        <form action="<?=getUrlControllerMethod("alquiler", "alquilados")?>" method="POST"> 
        <input type="hidden" name="idvehiculo" value="<?= $vehiculo["idvehiculo"]?>">        
        <td>
        <button data-toggle="modal" data-target="#reg-devolucion" class="mb-3 btn btn-dark" >Registrar Devolución</button>
        <?php include("registro.php") ?>
        </td>
        </form>
    </tr>
    <?php } ?>
</table>

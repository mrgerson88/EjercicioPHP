<h3 class="mt-2" ><?= $data["tituloPagina"] ?></h3>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Marca</th>
        <th>Tipo combustible</th>
        <th>Cantidad cilindros</th>
        <th>Volumen</th>
        <th><?= $data["titulo"] ?></th>
    </thead>
    <?php foreach($data["lista"] as $vehiculo){ ?>
    <tr>
        <td><?= ucfirst($vehiculo["marca"]) ?></td>
        <td><?= $vehiculo["tipoCombustible"]?></td>
        <td><?= $vehiculo["cantCilindros"]?></td>
        <td><?= $vehiculo["volumen"]?></td>
        <td><?= $vehiculo[$data['attrPropio']]?></td>
    </tr>
    <?php } ?>
</table>
<h3>Lista de Empleados</h3>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Id Number</th>
        <th>Nombre</th>
        <th>Revisiones</th>
    </thead>
    <?php foreach($data["listaempleados"] as $empleado){ ?>
    <tr>
        <td><?= $empleado["idempleados"] ?></td>
        <td><?= $empleado["nombre"]?></td>
        <td>
            <form action="<?= getUrlControllerMethod("empleado","listRevEmpleados")?>" method="POST">
                <input type="hidden" name="idEmpleado" value="<?= $empleado["idempleados"] ?>">
                <button class="btn btn-dark" data-toggle="modal" data-target="#revisiones">Revisiones</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
<button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#regEmpleado">Registrar Empleado</button>     
<hr>
<?php if($data["listaRevEmp"] && $data["listaRevEmp"] != null ){ ?>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Id Revisión</th>
        <th>Fecha</th>
    </thead>
    <?php foreach($data["listaRevEmp"] as $empleado){ ?>
        <tr>
            <td><?= $empleado["idrevisiones"] ?></td>
            <td><?= $empleado["fecha"]?></td>
        </tr>
    <?php } ?>
<?php } ?>
</table>

<!-- modal -->

<div class="modal fade" id="regEmpleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Registrar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= getUrlControllerMethod("empleado","listRevEmpleados")?>" method="POST">
                <input name="idEmpleado" value="<?= $empleado["idempleados"] ?>"><br><br>
                <button class="btn btn-dark" data-toggle="modal" data-target="#revisiones">Guardar</button>
            </form>
      </div>

    </div>
  </div>
</div>
<!-- modal -->
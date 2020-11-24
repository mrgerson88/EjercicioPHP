<div class="modal fade" id="reg-devolucion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Registrar Devolución <i class="fa fa-user-plus"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= getUrlControllerMethod("alquiler","devolucion")?>" method="POST">
          <div class="form-group">
            <label for="fecha">Fecha Devolución</label>
            <input type="text" name="nit" class="form-control" id="nit">
          </div>
          <div class="form-group">
            <label for="lugarDevolucion">Lugar Devolución</label>
            <input type="text" name="lugarDevolucion" class="form-control" id="lugarDevolucion">
          </div>
          <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="text" name="saldo" class="form-control" id="saldo">
          </div>          
          <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>

    </div>
  </div>
</div>
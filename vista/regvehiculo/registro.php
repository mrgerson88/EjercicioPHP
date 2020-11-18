<div class="container-fluid mt-5">
        <div class="col-6">
            <h2>Registrar Compra Vehiculo</h2>
        </div>
        <form class="col-6" action="<?= getUrlControllerMethod('RegVehiculo','registrar') ?>" method="POST">
            <div class="form-group">
             <label for="volumen">Volumen</label>
             <input id="volumen" class="form-control" name="volumen" type="text">
            </div>
            <div class="form-group">
             <label for="tipoCombustible">Tipo combustible</label>
             <input id="tipoCombustible" class="form-control" name="tipoCombustible" type="text">
            </div>
            <div class="form-group">
             <label for="cantidadCilindros">Cantidad cilindros</label>
             <input id="cantidadCilindros" class="form-control" type="text" name="cantidadCilindros">
            </div>
            <div class="form-group">
                <label for="tipoAuto">Seleccione el tipo de Vehiculo</label>
            
             <select id="tipoAuto" class="form-control" name="tipoAuto">
                <option>Seleccione</option>
                <option value="1">Automovil</option>
                <option value="2">Furgoneta
                <option value="3">Van</option>
             </select>
            </div>
            <div class="form-group">
            <input name="cantidadPasajeros" class="form-control" id="cantidadPasajeros" style="display:none"  placeholder="cantidad pasajeros..." type="text">

            <input name="cantidadPuertas" class="form-control" id="cantidadPuertas" style="display:none"   placeholder="cantidad puertas..." type="text">
            <input name="capacidadCarga" class="form-control" id="capacidadCarga" style="display:none"   placeholder="capacidad carga...." type="text">
            </div>
            <div class="mb-2"> 
            <input type="submit" class="btn btn-dark" value="Registrar">
            </div>
        </form>
    </div>
    
    <script>
        $(function() {
            $("#tipoAuto").change(function() {
                if ($(this).val() === "1") {
                    $("#cantidadPuertas").show();
                    $("#capacidadCarga").hide();
                    $("#cantidadPasajeros").hide();
                }else if($(this).val() === "2") {
                    $("#capacidadCarga").show();
                    $("#cantidadPasajeros").hide();
                    $("#cantidadPuertas").hide();
                }else{
                    $("#cantidadPasajeros").show();
                    $("#cantidadPuertas").hide();
                    $("#capacidadCarga").hide();
                }
            });
        });
    </script>

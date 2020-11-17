<div class="container mt-5">
        <h2>Registrar Compra Vehiculo</h2>
        <form class="col s12" action="<?= CONTEXT_APP . '/index.php' ?>" method="GET">
            <input type="hidden" name="controller" value="RegVehiculo">
            <input type="hidden" name="method" value="registrar">
            <h5>Volumen<h5>
            <input name="volumen" type="text">
            <h5>Tipo Combustible<h5>
            <input name="tipoCombustible" type="text">
            <h5>Cantidad de Cilindros<h5>
            <input type="text" name="cantidadCilindros">
            <select id="tipoAuto" name="tipoAuto">
                <option>Seleccione</option>
                <option value="1">Automovil</option>
                <option value="2">Furgoneta
                <option value="3">Van</option>
            </select>
            <br><br>
            <input name="cantidadPasajeros" id="cantidadPasajeros" style="display:none"  placeholder="cantidad pasajeros..." type="text">
            <input name="cantidadPuertas" id="cantidadPuertas" style="display:none"   placeholder="cantidad puertas..." type="text">
            <input name="capacidadCarga" id="capacidadCarga" style="display:none"   placeholder="capacidad carga...." type="text">
            <input type="submit" class="btn btn-dark" value="Registrar">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Compra vehiculo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head> 
<body>
    <div class="container mt-5">
        <h2>Registrar Compra Vehiculo</h2>
        <form action="/EjercicioPHP/controlador/registro_compra.php" method="POST">
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>

<?php



?>


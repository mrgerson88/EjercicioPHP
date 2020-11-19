<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $data["titulo"] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/42172cd675.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="fa fa-car"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                Particulares <i class="fa fa-user"></i>
                </a>
                <a class="dropdown-item" href="#">Agencias
                <i class="fa fa-users"></i>
                </a>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Revisiones</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Alquilar vehiculo</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vehiculos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= getUrlControllerMethod('vehiculo','registro')?>">Registrar Compra</a>
            <div class="dropdown-divider"></div>
            <form action="<?= getUrlControllerMethod("vehiculo","listar") ?>" method="POST">
                <button name="van" type="submit" class="dropdown-item">Van</button>
                <input type="hidden" name="action" value="van">
            </form>
            <form action="<?= getUrlControllerMethod("vehiculo","listar") ?>" method="POST">
                <button name="automovil" type="submit" class="dropdown-item" href="#">Automovil</a>
                <input type="hidden" name="action" value="automovil">
            </form>
            <form action="<?= getUrlControllerMethod("vehiculo","listar") ?>" method="POST">
                <button name="furgoneta" type="submit" class="dropdown-item" href="#">Furgoneta</a>
                <input type="hidden" name="action" value="furgoneta">
            </form>
        </div>
        </li>
    </ul>
    </div>
</nav>
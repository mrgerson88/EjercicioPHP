<?php

define("CONTEXT_APP","/concesionario");


define("RESOURCES", CONTEXT_APP . "/vista/resources/");
define("DOCUMENT_ROOT", $_SERVER["DOCUMENT_ROOT"] . CONTEXT_APP);
define("DIR_CONTROLLER", DOCUMENT_ROOT . "/controlador/");
define("DIR_CONTROLLER_VEHICULO", DIR_CONTROLLER . "vehiculo/");
define("DIR_VIEW", DOCUMENT_ROOT . "/vista/");
define("DIR_MODEL", DOCUMENT_ROOT . "/modelo/");
define("DIR_SERVICE", DOCUMENT_ROOT . "/servicios/");


include("autoload.php");
include("funciones.php");
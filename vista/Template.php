<?php

class Template {

    public static function render($rutaContenido, $data = []){
        include(DIR_VIEW . "template/header.php");

        include($rutaContenido);

        include(DIR_VIEW . "template/footer.php");
    }

    public static function renderLogin($rutaContenido,$data = []){
        
        include(DIR_VIEW . "template/header.php");
        
        include($rutaContenido);
    }

}
<?php

class MvcController {


public function enlacesVistasController(){

    if (isset($_GET["action"])) {
        
        $enlaces = $_GET["action"];
        echo "url $enlaces";
    }
    else {
        $enlaces = "index";
    }

    $respuesta = MvcModel::enlacesVistasModel($enlaces);
    include $respuesta;
}

}
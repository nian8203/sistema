<?php

class MvcModel
{


    public static function enlacesVistasModel($enlace)
    {
        echo "URL model $enlace";
        if ($enlace == "acudientes" ||
        $enlace == "alumnos" ||
        $enlace == "docentes") {
            
            echo "enlace seleccionado $enlace";
            $module = "views/modules/usuarios/".$enlace.".php";
            echo "$module";
        }

        return $module;
    }
}

?>

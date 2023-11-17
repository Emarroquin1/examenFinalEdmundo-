<?php

require_once "../model/DAOcategory.php"; // Ajusta la ruta según la ubicación real de tu clase


$dao = new DAOCategory();

$respuesta = null;
$data = array();

if ($_POST) {
    if (isset($_POST["key"])) {
        $key = $_POST["key"];

        switch ($key) {
            case "getComboCategorias":
                $respuesta = $dao->getComboCategorias();
                break;


        }
    }
}

echo $respuesta;

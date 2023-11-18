<?php

require_once "../model/DAOcategory.php"; // Ajusta la ruta según la ubicación real de tu clase
require_once "../Model/DAOEmploye.php";
require_once "../Model/DAOCustomer.php";
require_once "../Model/DAOProduct.php";
$dao = new DAOCategory();
$dao1 = new DAOEmploye();
$dao2 = new  DAOCustomer();
$dao3 = new DAOProduct();

$respuesta = null;
$data = array();

if ($_POST) {
    if (isset($_POST["key"])) {
        $key = $_POST["key"];

        switch ($key) {
            case "getComboCategorias":
                $respuesta = $dao->getComboCategorias();
                break;
            case "getExcel4":
                $respuesta = $dao1->getExcel4();
                break;
            case "getExcel2":
                $country = $_POST["country"];
                $respuesta = $dao2->getExcel2($country);
                break;
            case "getExcel3":
                $stock = $_POST["stock"];
                $respuesta = $dao3->getExcel3($stock);
                break;
            case "getExcel1":
                $categoryid = $_POST["cmbIdCategoria"];
                $respuesta = $dao3->getExcel1($categoryid);
                break;
        }
    }
}

echo $respuesta;

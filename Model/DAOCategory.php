<?php
require_once "config.php";
require_once "Category.php"; 

class DAOCategory
{       
    private $con;

    private function conectar()
    {
        try {
            $this->con = new mysqli(SRV, USR, PWD, SCHEMA);
        } catch (Exception $ex) {
            echo "<script>console.log('Ocurrió un error de conexión...')</script>";
        }
    }

    private function desconectar()
    {
        $this->con->close();
    }

    public function getComboCategorias()
    {
        $sql = "SELECT categoryid, categoryname FROM categories";
        $this->conectar();
        $res = $this->con->query($sql);
        $html = "";
        while ($fila = mysqli_fetch_assoc($res)) {
            $html .= "<option value='" . $fila["categoryid"] . "'>";
            $html .= $fila["categoryname"];
            $html .= "</option>";
        }
        $res->close();
        $this->desconectar();
        return $html;
    }
}

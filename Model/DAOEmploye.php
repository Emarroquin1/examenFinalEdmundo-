<?php
require_once "config.php";
require_once "Employe.php"; 

class DAOEmploye
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


    public function rptEmployes()
{
    $sql = "SELECT employeeid, firstname, lastname, address, city, postalcode, homephone FROM employees ";

    $this->conectar();
    $res = $this->con->query($sql);

    $html = "<table class='table table-bordered'><thead>";
    $html .= "<th>FirstName</th><th>LastName</th><th>Address</th><th>City</th><th>PostalCode</th><th>HomePhone</th>";
    $html .= "</thead><tbody>";

    $cont = 0;
    while ($fila = mysqli_fetch_assoc($res)) {
        $employee = new Employee();
        $employee->setEmployeeID($fila["employeeid"])
            ->setFirstName($fila["firstname"])
            ->setLastName($fila["lastname"])
            ->setAddress($fila["address"])
            ->setCity($fila["city"])
            ->setPostalCode($fila["postalcode"])
            ->setHomePhone($fila["homephone"]);

        $html .= "<tr>";
        $html .= "<td>" . $employee->getFirstName() . "</td>";
        $html .= "<td>" . $employee->getLastName() . "</td>";
        $html .= "<td>" . $employee->getAddress() . "</td>";
        $html .= "<td>" . $employee->getCity() . "</td>";
        $html .= "<td>" . $employee->getPostalCode() . "</td>";
        $html .= "<td>" . $employee->getHomePhone() . "</td>";
        $html .= "</tr>";
        $cont++;
    }
    $html .= "</tbody></table>";
    $res->close();
    $this->desconectar();

    $data = array();
    $data[] = $html;
    $data[] = $cont;

    return $data;
}


}
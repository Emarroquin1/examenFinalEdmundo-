<?php
require_once "config.php";
require_once "Customer.php";

class DAOCustomer
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

    public function rptCustomersByCountry($country)
    {
        $sql = "SELECT customerid, companyname, contactname, contacttitle, address, city, region, postalcode, ";
        $sql .= "country, phone, fax, trial909 FROM customers ";
        $sql .= "WHERE country = '$country'";

        $this->conectar();
        $res = $this->con->query($sql);

        $html = "<table class='table table-bordered'><thead>";
        $html .= "<th>CustomerID</th><th>ContactName</th><th>Address</th><th>Country</th>";
        $html .= "<th>Phone</th>";
        $html .= "</thead><tbody>";

        $cont = 0;
        while ($fila = mysqli_fetch_assoc($res)) {
            $customer = new Customer();
            $customer->setCustomerID($fila["customerid"])
                ->setCompanyName($fila["companyname"])
                ->setContactName($fila["contactname"])
                ->setContactTitle($fila["contacttitle"])
                ->setAddress($fila["address"])
                ->setCity($fila["city"])
                ->setRegion($fila["region"])
                ->setPostalCode($fila["postalcode"])
                ->setCountry($fila["country"])
                ->setPhone($fila["phone"])
                ->setFax($fila["fax"])
                ->setTrial909($fila["trial909"]);

            $html .= "<tr>";
            $html .= "<td>" . $customer->getCustomerID() . "</td>";
            $html .= "<td>" . $customer->getContactName() . "</td>";
            $html .= "<td>" . $customer->getAddress() . "</td>";
            $html .= "<td>" . $customer->getCountry() . "</td>";
            $html .= "<td>" . $customer->getPhone() . "</td>";
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

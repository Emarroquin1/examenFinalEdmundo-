<?php
require_once "config.php";
require_once "Customer.php";

//para lo de excel
require_once __DIR__ . '/../View/reportes/vendor/autoload.php';

use FontLib\Table\Type\head;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
///////////////////////////////////////////////////////////

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

        $html = "<table class='table'><thead>";
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

    public function getExcel2($country)
    {
        $sql = "SELECT customerid, companyname, contactname, contacttitle, address, city, region, postalcode, ";
        $sql .= "country, phone, fax, trial909 FROM customers ";
        $sql .= "WHERE country = '$country'";

        $this->conectar();
        $res = $this->con->query($sql);

        $excel = new Spreadsheet();
        $hojaActiva = $excel->getActiveSheet();
        $hojaActiva->setTitle("CLIENTES POR PAIS");
        $hojaActiva->getStyle('A4:E4')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        //ENCABEZADO
        $hojaActiva->setCellValue("A2", "NIT: 65657-8754-9876-2");
        $hojaActiva->setCellValue("B2", "EXAMEN PRACTICO FINAL");
        $hojaActiva->setCellValue("C2", "REPORTE CLIENTE SEGUN PAIS");

        //ENCABEZADOS DE LA TABLA 
        $hojaActiva->getColumnDimension("A")->setWidth(25);
        $hojaActiva->setCellValue("A4", "CUSTOMER ID");
        $hojaActiva->getColumnDimension("B")->setWidth(25);
        $hojaActiva->setCellValue("B4", "CONTACT NAME");
        $hojaActiva->getColumnDimension("C")->setWidth(25);
        $hojaActiva->setCellValue("C4", "ADDRESS");
        $hojaActiva->getColumnDimension("D")->setWidth(30);
        $hojaActiva->setCellValue("D4", "COUNTRY");
        $hojaActiva->getColumnDimension("E")->setWidth(30);
        $hojaActiva->setCellValue("E4", "PHONE");

        //LOS REGISTROS DE LA BASE DE DATOS
        $fila = 5;
        while ($filas = $res->fetch_assoc()) {
            $hojaActiva->setCellValue("A" . $fila, $filas["customerid"]);
            $hojaActiva->setCellValue("B" . $fila, $filas["contactname"]);
            $hojaActiva->setCellValue("C" . $fila, $filas["address"]);
            $hojaActiva->setCellValue("D" . $fila, $filas["country"]);
            $hojaActiva->setCellValue("E" . $fila, $filas["phone"]);
            $fila++;
        }

        //ENVIAR ENCABEZADOS
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="ReporteClientesPorPais.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($excel, "Xlsx");
        $writer->save('php://output');
        exit;
    }
}

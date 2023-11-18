<?php
require_once "config.php";
require_once "Employe.php";

//para lo de excel
require_once __DIR__ . '/../View/reportes/vendor/autoload.php';

use FontLib\Table\Type\head;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
///////////////////////////////////////////////////////////
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

        $html = "<table class='table'><thead>";
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
    public function getExcel4()
    {
        $sql = "SELECT employeeid, firstname, lastname, address, city, postalcode, homephone FROM employees ";
        $this->conectar();
        $res = $this->con->query($sql);

        $excel = new Spreadsheet();
        $hojaActiva = $excel->getActiveSheet();
        $hojaActiva->setTitle("REPORTE CONTACTO DE EMPLEADOS");
        $hojaActiva->getStyle('A4:F4')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        //ENCABEZADO
        $hojaActiva->setCellValue("A2", "NIT: 65657-8754-9876-2");
        $hojaActiva->setCellValue("B2", "EXAMEN PRACTICO FINAL");
        $hojaActiva->setCellValue("C2", "REPORTE SOBRE CONTACTO DE EMPLEADOS");

        //ENCABEZADOS DE LA TABLA 
        $hojaActiva->getColumnDimension("A")->setWidth(25);
        $hojaActiva->setCellValue("A4", "FIRST NAME");
        $hojaActiva->getColumnDimension("B")->setWidth(25);
        $hojaActiva->setCellValue("B4", "LASTNAME");
        $hojaActiva->getColumnDimension("C")->setWidth(25);
        $hojaActiva->setCellValue("C4", "ADDRESS");
        $hojaActiva->getColumnDimension("D")->setWidth(30);
        $hojaActiva->setCellValue("D4", "CITY");
        $hojaActiva->getColumnDimension("D")->setWidth(30);
        $hojaActiva->setCellValue("E4", "POSTAL CODE");
        $hojaActiva->getColumnDimension("D")->setWidth(30);
        $hojaActiva->setCellValue("F4", "HOME PHONE");

        //LOS REGISTROS DE LA BASE DE DATOS
        $fila = 5;
        while ($filas = $res->fetch_assoc()) {
            $hojaActiva->setCellValue("A" . $fila, $filas["firstname"]);
            $hojaActiva->setCellValue("B" . $fila, $filas["lastname"]);
            $hojaActiva->setCellValue("C" . $fila, $filas["address"]);
            $hojaActiva->setCellValue("D" . $fila, $filas["city"]);
            $hojaActiva->setCellValue("E" . $fila, $filas["postalcode"]);
            $hojaActiva->setCellValue("F" . $fila, $filas["homephone"]);
            $fila++;
        }

        //ENVIAR ENCABEZADOS
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="ReporteContactoEmpleados.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($excel, "Xlsx");
        $writer->save('php://output');
        exit;
    }
}

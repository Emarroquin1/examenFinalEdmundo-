<?php
require_once "config.php";
require_once "Product.php"; // Asegúrate de ajustar la ruta correcta

class DAOProduct
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


    public function obtenerProductosPorCategoria($categoryId)
    {
        $this->conectar();

        // Prepara la consulta SQL para obtener productos por ID de categoría
        $stmt = $this->con->prepare("SELECT * FROM products WHERE categoryid = ?");

        // Vincula el parámetro
        $stmt->bind_param("i", $categoryId);

        // Ejecuta la consulta
        $stmt->execute();

        // Obtiene el resultado de la consulta
        $resultado = $stmt->get_result();

        // Inicializa un array para almacenar los productos
        $productos = array();

        // Recorre los resultados y agrega los productos al array
        while ($fila = $resultado->fetch_assoc()) {
            $producto = new Product();
            $producto->setProductID($fila['productid']);
            $producto->setProductName($fila['productname']);
            $producto->setSupplierID($fila['supplierid']);
            $producto->setCategoryID($fila['categoryid']);
            $producto->setQuantityPerUnit($fila['quantityperunit']);
            $producto->setUnitPrice($fila['unitprice']);
            $producto->setUnitsInStock($fila['unitsinstock']);
            $producto->setUnitsOnOrder($fila['unitsonorder']);
            $producto->setReorderLevel($fila['reorderlevel']);
            $producto->setDiscontinued($fila['discontinued']);
            $producto->setTrial909($fila['trial909']);

            $productos[] = $producto;
        }

        $this->desconectar();

        return $productos;
    }

    public function rptProductosByCategoria($categoryid)
    {
        $sql = "SELECT p.productid, p.productname, p.supplierid, p.categoryid, p.quantityperunit, ";
        $sql .= "p.unitprice, p.unitsinstock, p.unitsonorder, p.reorderlevel, p.discontinued, p.trial909, ";
        $sql .= "c.categoryname, pro.companyname FROM products p ";
        $sql .= "INNER JOIN categories c ON p.categoryid = c.categoryid ";
        $sql .= "INNER JOIN suppliers pro ON p.supplierid = pro.supplierid ";
        $sql .= "WHERE p.categoryid = $categoryid";




        $this->conectar();
        $res = $this->con->query($sql);

        $html = "<table class='table table-bordered'><thead>";
        $html .= "<th>ID</th><th>NOMBRE</th><th>STOCK</th><th>STOCK MIN</th><th>CATEGORIA</th><th>PROVEEDOR</th>";
        $html .= "</thead><tbody>";

        $cont = 0;
        while ($fila = mysqli_fetch_assoc($res)) {
            $product = new Product();
            $product->setProductID($fila["productid"])
                ->setProductName($fila["productname"])
                ->setSupplierID($fila["supplierid"])
                ->setCategoryID($fila["categoryid"])
                ->setQuantityPerUnit($fila["quantityperunit"])
                ->setUnitPrice($fila["unitprice"])
                ->setUnitsInStock($fila["unitsinstock"])
                ->setUnitsOnOrder($fila["unitsonorder"])
                ->setReorderLevel($fila["reorderlevel"])
                ->setDiscontinued($fila["discontinued"])
                ->setTrial909($fila["trial909"]);

            $html .= "<tr>";
            $html .= "<td>" . $product->getProductID() . "</td>";
            $html .= "<td>" . $product->getProductName() . "</td>";
            $html .= "<td>" . $product->getUnitsInStock() . "</td>";
            $html .= "<td>" . $product->getReorderLevel() . "</td>";
            $html .= "<td>" . $fila["categoryname"] . "</td>";
            $html .= "<td>" . $fila["companyname"] . "</td>";
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

    public function rptProductosByStock($stock)
    {
        $sql = "SELECT p.productid, p.productname, p.unitsinstock FROM products p ";
        $sql .= "INNER JOIN categories c ON p.categoryid = c.categoryid ";
        $sql .= "INNER JOIN suppliers pro ON p.supplierid = pro.supplierid ";
        $sql .= "WHERE p.unitsinstock <= $stock";

        $this->conectar();
        $res = $this->con->query($sql);

        $html = "<table class='table table-bordered'><thead>";
        $html .= "<th>ID</th><th>NOMBRE</th><th>STOCK</th>";
        $html .= "</thead><tbody>";

        $cont = 0;
        while ($fila = mysqli_fetch_assoc($res)) {
            $product = new Product();
            $product->setProductID($fila["productid"])
                ->setProductName($fila["productname"])
                ->setUnitsInStock($fila["unitsinstock"]);

            $html .= "<tr>";
            $html .= "<td>" . $product->getProductID() . "</td>";
            $html .= "<td>" . $product->getProductName() . "</td>";
            $html .= "<td>" . $product->getUnitsInStock() . "</td>";
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

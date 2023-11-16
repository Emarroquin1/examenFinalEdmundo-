<?php

class Producto
{

    private $ProductID;
    private $ProductName;
    private $SupplierID;
    private $CategoryID;
    private $QuantityPerUnit;
    private $UnitPrice;
    private $UnitsInStock;
    private $UnitsOnOrder;
    private $ReorderLevel;
    private $Discontinued;

    public function __construct()
    {
    }

    // Getters
    public function getProductID()
    {
        return $this->ProductID;
    }

    public function getProductName()
    {
        return $this->ProductName;
    }

    public function getSupplierID()
    {
        return $this->SupplierID;
    }

    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    public function getQuantityPerUnit()
    {
        return $this->QuantityPerUnit;
    }

    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    public function getUnitsInStock()
    {
        return $this->UnitsInStock;
    }

    public function getUnitsOnOrder()
    {
        return $this->UnitsOnOrder;
    }

    public function getReorderLevel()
    {
        return $this->ReorderLevel;
    }

    public function getDiscontinued()
    {
        return $this->Discontinued;
    }

    // Setters
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
        return $this;
    }

    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;
        return $this;
    }

    public function setSupplierID($SupplierID)
    {
        $this->SupplierID = $SupplierID;
        return $this;
    }

    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;
        return $this;
    }

    public function setQuantityPerUnit($QuantityPerUnit)
    {
        $this->QuantityPerUnit = $QuantityPerUnit;
        return $this;
    }

    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

    public function setUnitsInStock($UnitsInStock)
    {
        $this->UnitsInStock = $UnitsInStock;
        return $this;
    }

    public function setUnitsOnOrder($UnitsOnOrder)
    {
        $this->UnitsOnOrder = $UnitsOnOrder;
        return $this;
    }

    public function setReorderLevel($ReorderLevel)
    {
        $this->ReorderLevel = $ReorderLevel;
        return $this;
    }

    public function setDiscontinued($Discontinued)
    {
        $this->Discontinued = $Discontinued;
        return $this;
    }
}

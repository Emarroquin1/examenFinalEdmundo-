<?php
class Product
{
    private $productid;
    private $productname;
    private $supplierid;
    private $categoryid;
    private $quantityperunit;
    private $unitprice;
    private $unitsinstock;
    private $unitsonorder;
    private $reorderlevel;
    private $discontinued;
    private $trial909;

    // Constructor
    public function __construct()
    {
    }

    // Getters
    public function getProductID()
    {
        return $this->productid;
    }

    public function getProductName()
    {
        return $this->productname;
    }

    public function getSupplierID()
    {
        return $this->supplierid;
    }

    public function getCategoryID()
    {
        return $this->categoryid;
    }

    public function getQuantityPerUnit()
    {
        return $this->quantityperunit;
    }

    public function getUnitPrice()
    {
        return $this->unitprice;
    }

    public function getUnitsInStock()
    {
        return $this->unitsinstock;
    }

    public function getUnitsOnOrder()
    {
        return $this->unitsonorder;
    }

    public function getReorderLevel()
    {
        return $this->reorderlevel;
    }

    public function getDiscontinued()
    {
        return $this->discontinued;
    }

    public function getTrial909()
    {
        return $this->trial909;
    }

    // Setters
    public function setProductID($productid)
    {
        $this->productid = $productid;
        return $this;
    }

    public function setProductName($productname)
    {
        $this->productname = $productname;
        return $this;
    }

    public function setSupplierID($supplierid)
    {
        $this->supplierid = $supplierid;
        return $this;
    }

    public function setCategoryID($categoryid)
    {
        $this->categoryid = $categoryid;
        return $this;
    }

    public function setQuantityPerUnit($quantityperunit)
    {
        $this->quantityperunit = $quantityperunit;
        return $this;
    }

    public function setUnitPrice($unitprice)
    {
        $this->unitprice = $unitprice;
        return $this;
    }

    public function setUnitsInStock($unitsinstock)
    {
        $this->unitsinstock = $unitsinstock;
        return $this;
    }

    public function setUnitsOnOrder($unitsonorder)
    {
        $this->unitsonorder = $unitsonorder;
        return $this;
    }

    public function setReorderLevel($reorderlevel)
    {
        $this->reorderlevel = $reorderlevel;
        return $this;
    }

    public function setDiscontinued($discontinued)
    {
        $this->discontinued = $discontinued;
        return $this;
    }

    public function setTrial909($trial909)
    {
        $this->trial909 = $trial909;
        return $this;
    }
}



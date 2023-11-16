<?php

class CLiente
{

    private $CustomerID;
    private $CompanyName;
    private $ContactName;
    private $ContactTitle;
    private $Address;
    private $City;
    private $Region;
    private $PostalCode;
    private $Country;
    private $Phone;
    private $Fax;

    public function __construct()
    {
    }

    // Getters
    public function getCustomerID()
    {
        return $this->CustomerID;
    }

    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    public function getContactName()
    {
        return $this->ContactName;
    }

    public function getContactTitle()
    {
        return $this->ContactTitle;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function getRegion()
    {
        return $this->Region;
    }

    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    public function getCountry()
    {
        return $this->Country;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function getFax()
    {
        return $this->Fax;
    }

    // Setters
    public function setCustomerID($CustomerID)
    {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    public function setContactTitle($ContactTitle)
    {
        $this->ContactTitle = $ContactTitle;
        return $this;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    public function setRegion($Region)
    {
        $this->Region = $Region;
        return $this;
    }

    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    public function setFax($Fax)
    {
        $this->Fax = $Fax;
        return $this;
    }
}

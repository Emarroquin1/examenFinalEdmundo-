<?php

class Customer
{
    private $customerid;
    private $companyname;
    private $contactname;
    private $contacttitle;
    private $address;
    private $city;
    private $region;
    private $postalcode;
    private $country;
    private $phone;
    private $fax;
    private $trial909;

    // Constructor
    public function __construct()
    {
    }

    // Getters
    public function getCustomerID()
    {
        return $this->customerid;
    }

    public function getCompanyName()
    {
        return $this->companyname;
    }

    public function getContactName()
    {
        return $this->contactname;
    }

    public function getContactTitle()
    {
        return $this->contacttitle;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getPostalCode()
    {
        return $this->postalcode;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function getTrial909()
    {
        return $this->trial909;
    }

    // Setters
    public function setCustomerID($customerid)
    {
        $this->customerid = $customerid;
        return $this;
    }

    public function setCompanyName($companyname)
    {
        $this->companyname = $companyname;
        return $this;
    }

    public function setContactName($contactname)
    {
        $this->contactname = $contactname;
        return $this;
    }

    public function setContactTitle($contacttitle)
    {
        $this->contacttitle = $contacttitle;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function setPostalCode($postalcode)
    {
        $this->postalcode = $postalcode;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    public function setTrial909($trial909)
    {
        $this->trial909 = $trial909;
        return $this;
    }
}

<?php

class Empleados
{

    private $EmployeeID;
    private $LastName;
    private $FirstName;
    private $Title;
    private $TitleOfCourtesy;
    private $BirthDate;
    private $HireDate;
    private $Address;
    private $City;
    private $Region;
    private $PostalCode;
    private $Country;
    private $HomePhone;
    private $Extension;
    private $Photo;  // Note: In a real-world scenario, consider handling images differently (e.g., storing paths, using a separate table)
    private $Notes;
    private $ReportsTo;
    private $PhotoPath;

    public function __construct()
    {
    }

    // Getters
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getTitle()
    {
        return $this->Title;
    }

    public function getTitleOfCourtesy()
    {
        return $this->TitleOfCourtesy;
    }

    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    public function getHireDate()
    {
        return $this->HireDate;
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

    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    public function getExtension()
    {
        return $this->Extension;
    }

    public function getPhoto()
    {
        return $this->Photo;
    }

    public function getNotes()
    {
        return $this->Notes;
    }

    public function getReportsTo()
    {
        return $this->ReportsTo;
    }

    public function getPhotoPath()
    {
        return $this->PhotoPath;
    }

    // Setters
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;
        return $this;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    public function setTitleOfCourtesy($TitleOfCourtesy)
    {
        $this->TitleOfCourtesy = $TitleOfCourtesy;
        return $this;
    }

    public function setBirthDate($BirthDate)
    {
        $this->BirthDate = $BirthDate;
        return $this;
    }

    public function setHireDate($HireDate)
    {
        $this->HireDate = $HireDate;
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

    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
        return $this;
    }

    public function setExtension($Extension)
    {
        $this->Extension = $Extension;
        return $this;
    }

    public function setPhoto($Photo)
    {
        $this->Photo = $Photo;
        return $this;
    }

    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    public function setReportsTo($ReportsTo)
    {
        $this->ReportsTo = $ReportsTo;
        return $this;
    }

    public function setPhotoPath($PhotoPath)
    {
        $this->PhotoPath = $PhotoPath;
        return $this;
    }
}

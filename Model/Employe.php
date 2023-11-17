<?php

class Employee
{
    private $employeeid;
    private $lastname;
    private $firstname;
    private $title;
    private $titleofcourtesy;
    private $birthdate;
    private $hiredate;
    private $address;
    private $city;
    private $region;
    private $postalcode;
    private $country;
    private $homephone;
    private $extension;
    private $photo;
    private $notes;
    private $reportsto;
    private $photopath;
    private $trial909;

    // Constructor
    public function __construct()
    {
    }

    // Getters
    public function getEmployeeID()
    {
        return $this->employeeid;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleOfCourtesy()
    {
        return $this->titleofcourtesy;
    }

    public function getBirthDate()
    {
        return $this->birthdate;
    }

    public function getHireDate()
    {
        return $this->hiredate;
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

    public function getHomePhone()
    {
        return $this->homephone;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function getReportsTo()
    {
        return $this->reportsto;
    }

    public function getPhotoPath()
    {
        return $this->photopath;
    }

    public function getTrial909()
    {
        return $this->trial909;
    }

    // Setters
    public function setEmployeeID($employeeid)
    {
        $this->employeeid = $employeeid;
        return $this;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setTitleOfCourtesy($titleofcourtesy)
    {
        $this->titleofcourtesy = $titleofcourtesy;
        return $this;
    }

    public function setBirthDate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setHireDate($hiredate)
    {
        $this->hiredate = $hiredate;
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

    public function setHomePhone($homephone)
    {
        $this->homephone = $homephone;
        return $this;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    public function setReportsTo($reportsto)
    {
        $this->reportsto = $reportsto;
        return $this;
    }

    public function setPhotoPath($photopath)
    {
        $this->photopath = $photopath;
        return $this;
    }

    public function setTrial909($trial909)
    {
        $this->trial909 = $trial909;
        return $this;
    }
}

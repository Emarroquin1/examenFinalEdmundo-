<?php

class Categoria
{

    private $CategoryID;
    private $CategoryName;
    private $Description;
    private $Picture;  // Note: "image" type is used in SQL Server, but this may need to be handled differently in PHP

    public function __construct()
    {
    }

    // Getters
    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function getPicture()
    {
        return $this->Picture;
    }

    // Setters
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;
        return $this;
    }

    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
        return $this;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    public function setPicture($Picture)
    {
        $this->Picture = $Picture;
        return $this;
    }
}

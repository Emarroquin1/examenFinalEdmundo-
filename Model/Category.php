<?php

class Category
{
    private $categoryid;
    private $categoryname;
    private $description;
    private $picture;
    private $trial906;

    // Constructor
    public function __construct()
    {
    }

    // Getters
    public function getCategoryID()
    {
        return $this->categoryid;
    }

    public function getCategoryName()
    {
        return $this->categoryname;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getTrial906()
    {
        return $this->trial906;
    }

    // Setters
    public function setCategoryID($categoryid)
    {
        $this->categoryid = $categoryid;
        return $this;
    }

    public function setCategoryName($categoryname)
    {
        $this->categoryname = $categoryname;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    public function setTrial906($trial906)
    {
        $this->trial906 = $trial906;
        return $this;
    }
}

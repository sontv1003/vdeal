<?php

class objProject {

    private $id = 0;
    private $cat_id = 0;
    private $area_id = 0;
    private $name = "";
    private $picture = "";
    private $summary = "";
    private $description = "";
    private $status = "";

    public function __construct() {
        
    }

    public function setID($id) {
        $this->$id = $id;
    }

    public function setCateID($cat_id) {
        $this->$cat_id = $cat_id;
    }

    public function setAreaID($area_id) {
        $this->$area_id = $area_id;
    }

    public function setName($name) {
        $this->$name = $name;
    }

    public function setPicture($picture) {
        $this->$picture = $picture;
    }

    public function setSummary($summary) {
        $this->$summary = $summary;
    }

    public function setDescription($description) {
        $this->$description = $description;
    }

    public function setStatus($status) {
        return $this->$status;
    }

    public function getID() {
        return $this->$id;
    }

    public function getCateID() {
        return $this->$cat_id;
    }

    public function getAreaID() {
        return $this->$area_id;
    }

    public function getName() {
        return $this->$name;
    }

    public function getPicture() {
        return $this->$picture;
    }

    public function getSummary() {
        return $this->$summary;
    }

    public function getDescription() {
        return $this->$description;
    }

    public function getStatus() {
        return $this->$status;
    }

}

?>

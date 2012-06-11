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
        $this->id = $id;
    }

    public function setCateID($cat_id) {
        $this->cat_id = $cat_id;
    }

    public function setAreaID($area_id) {
        $this->area_id = $area_id;
    }

    public function setName($name) {
        $this->name = mysql_real_escape_string($name);
    }

    public function setPicture($picture) {
        $this->picture = mysql_real_escape_string($picture);
    }

    public function setSummary($summary) {
        $this->summary = mysql_real_escape_string($summary);
    }

    public function setDescription($description) {
        $this->description = mysql_real_escape_string($description);
    }

    public function setStatus($status) {
        $this->status = mysql_real_escape_string($status);
    }

    public function getID() {
        return $this->id;
    }

    public function getCateID() {
        return $this->cat_id;
    }

    public function getAreaID() {
        return $this->area_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStatus() {
        return $this->status;
    }

}

?>

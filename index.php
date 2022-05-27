<?php 

class Movie {
    public $title;
    public $year;
    public $country;
    public $length;
    public function getLength(){
        return 'Questo film dura $this->length';
    }
    public function __construct(String $_title, Int $_year, String $_country, Int $_length){
        $this->title = $_title;
        $this->year = $_year;
        $this->country = $_country;
        $this->length = $_length;
    }
}
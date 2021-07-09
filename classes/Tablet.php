<?php 

require_once __DIR__ . "/Product.php";

class Tablet extends Product {
    public $screen;
    public $battery;
    public $pen;

    function __construct($name, $code, $price, $screen, $battery, $pen){
        parent::__construct($name, $code, $price);
        $this->screen = $screen;
        $this->battery = $battery;
        $this->pen = $pen;
    }
}
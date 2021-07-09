<?php 

require_once __DIR__ . "/Product.php";

class Smartphone extends Product {
    public $screen;
    public $operatingSystem;
    public $connectivity;
    public $camera;
    

    function __construct($name, $code, $price, $screen, $operatingSystem, $connectivity, $camera){
        parent::__construct($name, $code, $price);
        $this->screen = $screen;
        $this->operatingSystem = $operatingSystem;
        $this->connectivity = $connectivity;
        $this->camera = $camera;
    }
}
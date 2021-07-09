<?php 

require_once __DIR__ . "/Product.php";

class Computer extends Product {
    public $screen;
    public $processor;
    public $ram;
    public $storage;

    function __construct($name, $code, $price, $screen, $processor, $ram, $storage){
        parent::__construct($name, $code, $price);
        $this->screen = $screen;
        $this->processor = $processor;
        $this->ram = $ram;
        $this->storage = $storage;
    }
}
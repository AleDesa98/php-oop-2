<?php 
class Product {
    public $name;
    public $code;
    public $price;

    function __construct($name, $code, $price) {
        $this->name = $name;
        $this->surname = $code;
        $this->address = $price;
    }
}
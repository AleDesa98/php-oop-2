<?php 

require_once __DIR__ . "/User.php";

class PremiumUser extends User {
    public $level;
    public $discount;

    function __construct($name, $surname, $address, $level){
        parent::__construct($name, $surname, $address);
        $this->level = $level;

        $this->discount = $this->level * 10;
    }
}
// $user1 = new PremiumUser("Alessandro", "De Santis", "San Carlo Canavese", 2);
// var_dump($user1);
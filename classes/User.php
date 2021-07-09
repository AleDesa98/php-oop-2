<?php 
class User {
    public $name;
    public $surname;
    public $address;

    function __construct($name, $surname, $address) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
    }
}

// $user1 = new User("Alessandro", "De Santis");
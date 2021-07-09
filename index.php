<?php 
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Smartphone.php';
require_once __DIR__ . '/classes/Tablet.php';
require_once __DIR__ . '/classes/Computer.php';

$user1 = new User("Alessandro", "De Santis", "Torino, Via Roma 1");
$user2 = new PremiumUser("Ale", "Desa", "Milano", 2);

$item1 = new Tablet("iPad", 001, 699, 11, 7800, true);
$item2 = new Smartphone("iPhone", 002, 729, 6.1, "iOS", "5G", "12MP");
$item3 = new Computer("iMac", 003, 799, 24, "M1", 8, 256);

var_dump($user1, $user2, $item1, $item2, $item3);

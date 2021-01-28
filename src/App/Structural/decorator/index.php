<?php

require_once('CheepApartments.php');
require_once('RichApartments.php');

$crib = new CheepApartments();
$family_house = new RichApartments($crib);

echo $crib->price();
echo $family_house->price();
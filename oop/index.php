<?php
// Bentuk fungsi
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

echo " Name : $sheep->name <br>"; // "shaun"
echo " legs : $sheep->legs <br>"; // 4
echo " cold_blooded : $sheep->cold_blooded <br> "; // "no"

$kodok = new Frog("buduk");
echo " <br> Name : $kodok->name <br>"; // "buduk"
echo " legs : $kodok->legs <br>"; // 4
echo " cold_blooded : $kodok->cold_blooded <br> "; // "no"
echo "jump: " . $kodok->jump() . "<br>"; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "<br> Name : $sungokong->name <br>"; // "kera sakti"
echo " legs : $sungokong->legs <br>"; // 2
echo " cold_blooded ; $sungokong->cold_blooded <br> "; // "no"
echo "yell: " . $sungokong->yell() . "<br>"; // "Auooo"

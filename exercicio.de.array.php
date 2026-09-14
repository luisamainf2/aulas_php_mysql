<?php

echo "meu array <br>";
$meuArray = array("volvo", 15, ["maçãs", "bananas"]);
var_dump($meuArray);
echo "<br>";

echo "meu segundo array <br>";
$meuSegundoArray = ["volvo", 15, ["maçãs", "bananas"]];
var_dump($meuSegundoArray);
echo "<br>";

$names = [
    "John",
    "Marry",
    "Jane",
    "All are Does"
];

var_dump($names);
echo "<br>";
// declarando array vazio

$cities = [];
$cities[0] = "luluchannelandia";
$cities[1] = "luisalandia";
$cities[2] = "lululandia";
var_dump($cities);
echo "<br>";


$cars = [];
$cars[0] = "brasilia";
$cars[1] = "puma";
$cars[2] = "veraneio";
var_dump($cars);

$myCar["brand"] = "volkswagen";
$myCar["model"] = "variant";
$myCar["year"] = 1970;
var_dump($myCar);

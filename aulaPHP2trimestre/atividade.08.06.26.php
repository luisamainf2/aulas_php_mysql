<?php

//  REMOVER ITENS DO ARRAY

//  ARRAY SPLICE()
//  Remove uma porção do array começando de uma posição inicial e um comprimento
echo "Remove uma porção do array começando de uma posição inicial e um comprimento<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
array_splice($cars, 1, 1);
var_dump($cars);
echo "<br><br>";

echo "Remove múltiplos itens do array começando de uma posição inicial e um comprimento<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
array_splice($cars, 1, 1);
var_dump($cars);
echo "<br><br>";


//  UNSET()
//  Remove o elemento associado a uma chave específica
echo "Remove o elemento associado a uma chave específica<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
unset($cars[0]);
var_dump($cars);
echo "<br><br>";

echo "Remove múltiplos elementos associados a uma chave específica<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
unset($cars[0], $cars[2]);
var_dump($cars);
echo "<br><br>";

echo "Remove itens de um array associativo<br>";
$cars = array("marca" => "Chevrolet", "modelo" => "Celta", "ano" => 2001);
unset($cars["modelo"]);
var_dump($cars);
echo "<br><br>";

//  ARRAY_DIFF()
//  Remove itens de um array associativo. Retorna um novo array
echo "Remove itens de um array associativo. Retorna um novo array.<br>";
$carros = array("marca" => "Chevrolet", "modelo" => "Celta", "ano" => 2001);
$novoArray = array_diff($carros, ["Celta", 2001]);
var_dump($novoArray);
echo "<br><br>";


//  ARRAY_POP()
//  Remove o último item do array
echo "Remove o último item do array<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
array_pop($cars);
var_dump($cars);
echo "<br><br>";

//  ARRAY_SHIFT()
//  Remove o primeiro item do array
echo "Remove o último item do array<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
array_shift($cars);
var_dump($cars);
echo "<br><br>";

//  Ordenando arrays
//  sort()
//  Ordem ascendente
echo "Ordenando em ordem ascendente<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
sort($cars);
var_dump($cars);
echo "<br><br>";

//  rsort()
//  Ordem desscendente
echo "Ordenando em ordem descendente<br>";
$cars = array("Chevrolet", "Fiat", "Volkswagen", "Ford");
rsort($cars);
var_dump($cars);
echo "<br><br>";
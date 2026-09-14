<?php
// Qual a sintáxe correta para criar um array em PHP?
echo "respostas atividade";
echo "<br>";
echo "1. Qual a sintáxe correta para criar um array em PHP?";
echo "<br>";
echo "colocar colchete tipo assim: ";
echo "<br>";
var_dump($fruits = array("maçã","banana","Morango"));
echo "<br>";
echo "<br>";

// Na seguinte matriz:
// $fruits = array('Apple', 'Banana', 'Orange');
// Qual seria a sintaxe correta para alterar o segundo valor de 'Banana' para 'Pineapple'?
echo "2. Qual seria a sintaxe correta para alterar o segundo valor de 'Banana' para 'Pineapple'?";
echo "<br>";
$fruits = array('Apple', 'Banana', 'Orange');
$newfruit [1] = "pineapple";
array_splice($fruits, 1, 0, $newfruit);
var_dump($fruits);

//  Exiba o segundo item da matriz $fruits.


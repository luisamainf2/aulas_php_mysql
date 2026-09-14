<?php



function myMessage()
{
    echo "hello world";
}
//chama a função
myMessage();
echo "<br>";
function familyName($name)
{
    echo"$name Alberti. <br>";
}

echo "<br>";
familyName("Flávio");
familyName("Isabella");
familyName("Lorena");
familyName("Luísa");
familyName("Heitor");
echo "<br>";

function familyNameBorn($name, $year)
{
    echo "$name Alberti. Nascido em $year. <br>";
}

familyNameBorn("Flávio", 1978);
familyNameBorn("Isabella", 1981);
familyNameBorn("Lorena", 1999);
familyNameBorn("Luísa",2008);
familyNameBorn("Heitor",2021);
echo "<br>";
echo "<br>";

function idade($idade)
{
    if($idade <= 12) {
        echo "Você tem $idade anos. Ainda é criança.";
    } elseif ($idade <= 19){
        echo "Você tem $idade anos e é adolescente.";
    } elseif ($idade <= 60){
        echo "Você tem $idade anos e é adulto.";
    } else {
        echo "Você tem $idade anos e é idoso.";
    }
}
echo "<br>";

idade(67);
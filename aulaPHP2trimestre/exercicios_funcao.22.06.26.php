<?php
//criar uma função que recebe um número e duas unidades de temperatura.
// A primeira unidade é a atual
// A segunda unidade é para a qual se quer converter
// Trabalhar com Kelvin, Celcius, Fahrenheit e Réaumur
// Pesquisem as fórmulas de conversão
// O que eu preciso?
// 3 variaveis ($temp, $unidade_1, $unidade_2)
// Avaliar se unidades são iguais
// Se forem iguais, imprimir na tela uma mensagem
// Caso contrário, fazer a conversão

function nome($temp, $unidade_2, $unidade_1)
{
    if($unidade_1 == $unidade_2) {
        echo "assim n da pra mudar nada";
    } else{
        // 1 - C PARA F
        if ($unidade_1 == "C" && $unidade_2 == "F"){
            $F = ($temp * 1.8 + 32);
            echo "o resultado é $F";
        }
echo "<br>";
        // 2 - F PARA C
        if ($unidade_1 == "F" && $unidade_2 == "C"){
            $C = ($temp - 32 * 5/9);
            echo "o resultado é $C";
        }
        // 3 - C PARA K
        if ($unidade_1 == "C" && $unidade_2 == "K"){
            $K = ($temp + 273.15);
            echo "o resultado é $K";
        }
echo "<br>";
        // 4 - K PARA C
        if ($unidade_1 == "K" && $unidade_2 == "C"){
            $C = ($temp - 273.15);
            echo "o resultado é $C";
        }
        // 5 - C PARA RE
        if ($unidade_1 == "C" && $unidade_2 == "RE"){
            $C = ($temp + 4/5);
            echo "o resultado é $C";
        }
        // 6 - RE PARA C
        if ($unidade_1 == "RE" && $unidade_2 == "C"){
            $RE = ($temp + 5/4);
            echo "o resultado é $RE";
        }
        // 7 - K PARA F
        if ($unidade_1 == "K" && $unidade_2 == "F"){
            $K = (9/5 + ($temp - 273.15 + 32));
            echo "o resultado é $K";
        }
        // 8 - F PARA K
        if ($unidade_1 == "F" && $unidade_2 == "K"){
            $F = (9/5 + ($temp - 32) + 273.15);
            echo "o resultado é $F";
        }
        // 9 - K PARA RE
        if ($unidade_1 == "K" && $unidade_2 == "RE"){
            $K = (4/5 + ($temp - 273.15));
            echo "o resultado é $K";
        }
        // 10 - RE PARA K
        if ($unidade_1 == "RE" && $unidade_2 == "K"){
            $RE = (5/4 + $temp + 273.15);
            echo "o resultado é $RE";
        }
        // 11 - F PARA  RE
        if ($unidade_1 == "F" && $unidade_2 == "RE"){
            $F = (4/9 + ($temp - 32));
            echo "o resultado é $F";
        }
        // 12 - RE PARA F
        if ($unidade_1 == "RE" && $unidade_2 == "F"){
            $RE = (9/4 + $temp + 32);
            echo "o resultado é $RE";
        }
    }
}
nome(20, "C", "F");
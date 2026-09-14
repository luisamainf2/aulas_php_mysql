<?php

### 🧩 Exercícios de PHP – Strings

//  Crie uma variável que receba uma frase com ao menos 30 palavras, contando como foi seu final de semana.

$frase = "Meu fim de semana foi muito legal, conversei com uma moça que é fono e ela me ajudou contando como é a profissão.";

//  Resolva as questões abaixo usando essa frase como base
//  Apresente os resultados na tela de forma organizada, contendo o número da pergunta, a pergunta e a resposta.
//
//  1. **Contar caracteres**
//  Crie um script que receba uma string e exiba o número total de caracteres usando `strlen()`.


echo $frase;
echo "<br>";
echo "<br>";
echo "1. Quantidade de caracteres: ";
echo strlen($frase);
echo "<br>";

//
//  2. **Converter para maiúsculas e minúsculas**
//  Dada uma string, exiba:
//
//   * tudo em maiúsculas (`strtoupper()`)
//   * tudo em minúsculas (`strtolower()`)
//

echo "<br>";
echo "2.Convertendo para maiúsculas e minúsculas";
echo "<br>";
echo "<br>";
echo "Maiúsculas: ";
echo strtoupper($frase);
echo "<br>";

echo "Minúsculas: ";
echo strtolower($frase);

//  3. **Inverter uma string**
//  Receba uma palavra e mostre sua versão invertida usando `strrev()`.
//

echo "<br>";
echo "<br>";
echo "3. Invertendo a frase: ";
echo strrev($frase);
echo "<br>";

//  4. **Verificar se contém uma palavra**
//  Peça uma frase e uma palavra, e verifique se a palavra existe na frase usando `strpos()`.
//

echo "<br>";
echo "4. verificando: ";
var_dump (strpos($frase, "fim"));

//  5. **Substituir palavras**
//  Substitua uma palavra específica dentro de uma frase usando `str_replace()`.
//
echo "<br>";
echo "<br>";
echo "5. substituindo: ";
var_dump (str_replace($frase,"de"));

//  6. **Remover espaços extras**
//  Dada uma string com espaços no início e no fim, remova-os usando `trim()`.
//
//  7. **Dividir uma string em array**
//  Transforme uma frase em um array de palavras usando `explode()`.
//
//  8. **Juntar elementos de um array em string**
//  Dado um array de palavras, junte tudo em uma string usando `implode()`.
//
//  9. **Contar palavras em uma frase**
//  Conte quantas palavras existem em uma frase usando `str_word_count()`.
//
//  10. **Capitalizar palavras**
//  Receba uma frase e transforme a primeira letra de cada palavra em maiúscula usando `ucwords()`.




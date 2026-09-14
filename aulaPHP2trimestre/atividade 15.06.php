<?php
//function placarJogo($placar, $pontos)
//{
//    echo "deu em $placar, $pontos ";
//}
//placarJogo("vitória");
//placarJogo("empate");
//placarJogo("derrota");

function times($time1, $time2)
{
    if($time1 < $time2) {
        echo "o time $time2 teve mais pontos e ganhou!!";
    } elseif ($time1 = $time2) {
        echo "o time $time1 empatou com o time $time2!!";
    } else {
        echo "o time $time2 teve mais pontos e ganhou!!";
    }
}
times(1,4);

<?php

require __DIR__. "/src/Modelo/titulo.php";
require __DIR__. "/src/Modelo/Filme.php";
require __DIR__. "/src/Modelo/Serie.php";
require __DIR__. "/src/Modelo/genero.php";
require __DIR__. "/src/calculos/calculadoraDeMaratonas.php";

echo "seja bem-vindo ao screen-match\n";

$filme = new Filme
(
    'thor',
    2021,
    genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(7);
$filme->avalia(9);
$filme->avalia(10);


//var_dump($filme);//

echo "a media deste filme é: ", $filme->media() . "\n";

//echo $filme->anoLancamento;

$serie = new Serie(
    'lost', 
    2007, 
    genero::Drama, 
    10, 20, 30
);

$serie->avalia(8);

echo $serie->media() . "\n";

//echo $serie->anoLancamento;

$calculadora = new CalculadoraDeMaratonas();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

echo "Para essa maratona, você precisa de $duracao minutos";





<?php

$helloWorld = 'Hello World '; 
$evento = 'PHPWomen! <br>';

$helloWorld = 'Bem-vindo ';

$tituloDaOficinaPHPWomen = $helloWorld . $evento;


//echo $teste_de_variavel = ''; 
echo $tituloDaOficinaPHPWomen;

define('CONSTANTE', 'valor da constante');
echo PHP_EOL . CONSTANTE;

$inteiro = 10;
var_dump($inteiro);

$boolean = true;
var_dump($boolean);

$boolean = false;
var_dump($boolean);

$lista = array();
$lista = [ ];
$arrayDeInteiros = [1,2,3,4, 'a', 'b', 'v' , ['1'] ];

var_dump($arrayDeInteiros);

var_dump($arrayDeInteiros[0]);
var_dump($arrayDeInteiros[5]);

$arrayDeInteiros[] = 10.9;
var_dump($arrayDeInteiros);
$arraySize = count($arrayDeInteiros);
var_dump($arrayDeInteiros[$arraySize - 1]);
var_dump($arrayDeInteiros[0 - 1]);

if ( true ) {
    echo 'deu certo<br>';
} else {
    echo 'nao deu';
}

$arrayDeInteiros[0] = 'entra no else';
if ( $arrayDeInteiros[0] == 1 ) {
    echo 'o primeiro item do array eh 1!<br>';
} else {
    echo "o valor é {$arrayDeInteiros[2]} <br>";
    echo "o titulo é $tituloDaOficinaPHPWomen <br>";
}

if ( false ) {
    echo 'nao entra!';
}
echo 'sempre acontece';

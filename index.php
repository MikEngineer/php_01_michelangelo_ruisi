<?php
$variabili = [
    $integer = 5,
    $float = 5.2,
    $string = "ciao",
    $boolean = true
];

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);


foreach($variabili as $variabile => $valore){
    define($variabile, $valore);
}

var_dump($variabili);

?>
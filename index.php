<?php

// Selfwork 1

$integer = 5;
$float = 5.2;
$string = "ciao";
$boolean = true;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);


const INTERO = 12;
const VIRGOLA = 1.2;
const STRINGA = "hello";
const BOOLEANO = false;

var_dump(INTERO);
var_dump(VIRGOLA);
var_dump(STRINGA);
var_dump(BOOLEANO);

// Selfwork 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = 'bevuto';
$text8 = "tutto";

echo "$text1 $text2 $text3$text4 $text5 $text2 $text7 $text8\n";
// oppure
// echo $text1 ." " . $text2 . " " . $text3.$text4 . " " . $text5 . " " . $text2 . " " . $text7 . " " . $text8;



// Selfwork 3

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => "selva",
  'elemento2' => 'possa',
  'elemento3' => [
    'che',
    'la',
    'via',
    ['smarrita']
  ],
 'fine' => '!'
];

$words3 = [
  'elemento4' => "Nel",
  'elemento5' => 'di',
  'elemento6' => [
    'cammin',
    'nostra',
    'vita',
    ['una']
  ],
 'fine' => '!'
];


// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

$results = $words3['elemento4'] . " " . $words1[6][3][0] . " " . $words3['elemento5'] . " " . $words3['elemento6'][0] . " " . $words3['elemento5'] . " " . $words3['elemento6'][1] . " " . $words3['elemento6'][2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words3['elemento6'][3][0] . " " . $words2['elemento1'] . " " . $words1[6][0] . "," . " " . $words2['elemento3'][0] . " " . $words2['elemento3'][1] . " " . $words1[7] . " " . $words2['elemento3'][2] . " " . $words1[6][1] . " " . $words2['elemento3'][3][0] . ".";

echo $results;



?>
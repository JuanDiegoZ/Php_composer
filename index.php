<?php

class Answer
{
    protected $clients = []; //My note
    protected $insurers = []; // My note
}

?>

// Sintaxis basica php.

// Asignacion

$num = 9;
$lang =  [
    'es'  = 'español',
    'en'  = 'english'
    ];

//aritmetica

echo "Suma 2 + 2 ".((int) 2 + (int) 2);
echo "Suma 2 - 2 ".((int) 2 - (int) 2);
echo "Suma 2 * 2 ". 2 * 2;
echo "Suma 2 + 2 ". 2 / 2;
echo "Modulo 2 % 2". 2 % 2;

//comparaciones.

// igualdad ==, valor '9'== 9
// igualdad ==, valor - tipo 9 === 9
// diferencia !=, valor
// diferencia !==, valor - tipo
// <, >, <=, >=

//variables

$app = 'name';
$name = 'Platzi';

echo $$app //Platzi
echo $app //name
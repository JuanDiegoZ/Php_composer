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


//Bloques de codigos sencillos en Php
if(condition)
{
    #code... 
}elseif(condition)
{
    #code... 
}else
{
   #code... 
}

swich ($login){
    case true;
        #code...
        break;    
    case false;
        #code...
        break;    
    default;
        #code...
        break;
}

foreach($datos as $row){

}
$a = 0;

while ($a <= 10)
{
    $a++;
}

do
{
    #code...
}while($a <= 10);

for($i = 0; $i < 10;, $i++){
    # code...
}
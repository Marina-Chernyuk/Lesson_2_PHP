<?php

/* Задание 3: Реализовать основные 4 арифметические операции 
 в виде функций с двумя параметрами. 
Обязательно использовать оператор return. */


function addition($a, $b) :int
{  
    return $a + $b;    
}
$sum = addition(1, 3);
echo $sum;

function subtraction($a, $b) :int
{ 
    return $a - $b;
}
$sub = subtraction(5, 7);
echo "<br>$sub";

function division ($a, $b) 
{
    return $a / $b;
}
$div = division(3, 6);
echo "<br>$div";

function multiplication($a, $b) :int 
{
    return $a * $b;
}
$mult = multiplication(3, 2);
echo "<br>$mult";

?>

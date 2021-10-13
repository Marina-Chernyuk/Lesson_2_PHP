<?php

/* Задание 4 : Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
 где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
 В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */


function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case 'умножение':
			return $arg1 * $arg2;
			break;
		case 'деление':
			return $arg1 / $arg2;
			break;
		case 'вычитание':
			return $arg1 - $arg2;
			break;
		case 'сложение':
			return $arg1 + $arg2;
			break;
		default: 
			return "Такой операции нет " . $operation;			
	}
}

$result = mathOperation(3, 2, 'деление');
echo 'Результат вычислений: ' .$result;

?>


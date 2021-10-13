<?php

/* Задание 6 : *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), 
где $val – заданное число, $pow – степень */

function power($val, $pow): float {
	
	if ($pow == 1) {
        return $val;

    } else if ($pow < 0) {
        return power(1 / $val, -$pow); // Степень с отрицательным показателем

    } else if ($pow > 0) {
		return $val * power($val, $pow - 1);
		}		
}
$result = power(-2, 4);
echo 'Результат возведения в степень: ' .$result;

?>
	
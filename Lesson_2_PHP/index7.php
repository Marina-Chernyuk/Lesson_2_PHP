<?php

/* Задание 7 : *Написать функцию, которая вычисляет текущее время 
и возвращает его в формате с правильными склонениями, 
например:
22 часа 15 минут
21 час 43 минуты */

function current_time(){
    $hours = date('H');
    if (($hours == 0) || ($hours >= 5 && $hours <= 20 )) {
        $h_txt = 'часов';
    } else if ($hours % 10 == 1) {
        $h_txt = ' час';
    } else if ($hours % 10 >=2 && $hours % 10 <= 4){
        $h_txt = ' часа';
    } else {
        $h_txt = ' часов';
    }
  
    $minuts = date('i');
      if (($minuts == 0) || ($minuts >= 5 && $minuts <= 20 )) {
          $m_txt = ' минут';
      } else if ($minuts % 10 == 1) {
          $m_txt = ' минута';
      } else if ($minuts % 10 >=2 && $minuts % 10 <= 4){
          $m_txt = 'минуты';
      } else {
          $m_txt = 'минут';
      }
      return $hours . ' '.$h_txt . ' '. $minuts . $m_txt;
  }
  echo 'Текущее время : '. ' ' . current_time();
?>
<?php

// Создаем пустой массив
$my_array = array();

// Добавляем в него пять разных чисел
$my_array[] = 10;
$my_array[] = 20;
$my_array[] = 30;
$my_array[] = 40;
$my_array[] = 50;

// Выводим массив с использованием цикла for
for ($i = 0; $i < count($my_array); $i++) {
    echo $my_array[$i] . "\n";
}

?>
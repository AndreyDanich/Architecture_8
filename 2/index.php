<?php
//цикл перебирает массив, производительность 
//производительность О(N)
$fruits = ['яблоко', 'груша', 'вишня', 'клубника'];
$id = 3;                                              
foreach (array_keys($fruits) as $fruit) {               
    if ($fruit == $id) {
        echo $fruits[$id].'<br>';
    }
}

// 
//цикл перебирает массив и каждый элемент добавляет в новый
//производительность О(N^2) 
$copyArray = [];
foreach ($fruits as $copyFruits) {
    array_push($copyArray, $copyFruits);
}
print_r($copyArray);
echo '<br>';

// 
//тут вроде так
//производительность О(N) 
function factorial($n) 
{
    if ($n <= 1) {
        return 1;
    } 

    return $n * factorial($n - 1); 
} 
 
echo factorial(5);
<?php
//Cоздайте функцию, которая принимает два аргумента, выполняет вычисление с их использованием, а затем возвращает предложение.
recArea(4, 10);
function recArea($number1, $number2)
{
  $number3 = $number1 + $number2;
  echo "$number1 + $number2 = $number3.";
}
echo '<br>';


//Создайте массив и выполните его сортировку.


$names = array("NICK","MIKE","ANNA","JONY","ABC","PHP");

sort($names);

$sorting = count($names);

for($a = 0; $a < $sorting; $a++)
{
 echo $names[$a];
 echo '<br>';
}

?>
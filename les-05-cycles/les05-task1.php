<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 5. Cycles. 
 * @link: https://php-start.com/lesson/php-start-theory/cycles
 * 
 * @task 1. Sum.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 20.02.2022
 * 
 * @link: https://www.php.net/manual/ru/control-structures.for.php
 * @link: https://www.php.net/manual/ru/control-structures.while.php
 * 
 * -----------------------------------------------------
 */

for($i=1,$s=0; $i<=25; $i++){
    $s+=$i;
}
echo $s;
echo "<br>";


$i=1; $s=0;

while($i<=25){
   $s+=$i;
   $i++;
}

echo $s;
echo "<br>";
<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 6. Functions. 
 * @link: https://php-start.com/lesson/php-start-theory/user-functions
 * 
 * @task 2. The quadratic equation.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 22.02.2022
 * 
 * @link: https://www.php.net/manual/ru/language.functions.php
 * 
 * -----------------------------------------------------
 */


// print_r(QuardEquation(1, 15, 56));  // -7, -8
// print_r(QuardEquation(4, -4, 1));  // 0.5
echo QuardEquation(5, 3, 7) ? "Ищи корни" : "Нет корней";  // Нет корней


function QuardEquation($a, $b, $c) {
    
    $x1; $x2; $d;
    
    $d = pow($b, 2) - 4*$a*$c;
    
    if ($d < 0) {
        return false;
    } elseif ($d == 0) {
        $x1 = -$b / (2 * $a);
        return $x1;
    } elseif ($d > 0) {
        $x1 = round( (-$b + sqrt($d)) / (2 * $a) , 2);
        $x2 = round( (-$b - sqrt($d)) / (2 * $a) , 2);
        return [$x1, $x2];
    }
        
}
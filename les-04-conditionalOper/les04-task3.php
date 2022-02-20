<?php
/* -----------------------------------------------------
 * 
 * Course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * Lesson 4. Conditional operators. 
 * https://php-start.com/lesson/php-start-theory/data-types
 * 
 * Task 3. Numbers equality.
 * 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 20.02.2022
 * 
 * Materials:
 * https://www.php.net/manual/ru/language.control-structures.php
 * https://skysmart.ru/articles/mathematic/kak-reshat-kvadratnye-uravneniya
 * 
 * -----------------------------------------------------
 */

$a = 7; $b = 9; $c = 5;

if($a==$b OR $a==$c OR $b==$c) {
    echo "Ошибка.<br>";
}else {
    //echo "Среднее арифметическое чисел $a, $b, $c = ".round((($a+$b+$c)/3),2).".<br>";
    echo "Cреднее число: ";
    if( ($a>$b && $a<$c) || ($a>$c && $a<$b) ) {
        echo "a = {$a}.";
    } elseif (($b>$a && $b<$c) || ($b>$c && b<$a) ) {
        echo "b = {$b}.";
    }else {
        echo "c = {$c}.";
    } 
}
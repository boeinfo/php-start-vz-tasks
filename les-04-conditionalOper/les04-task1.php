<?php
/* -----------------------------------------------------
 * 
 * Course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * Lesson 4. Conditional operators. 
 * https://php-start.com/lesson/php-start-theory/data-types
 * 
 * Task 1. Occurrence of a number to a range.
 * 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 20.02.2022
 * 
 * Materials:
 * https://www.php.net/manual/ru/language.control-structures.php
 * 
 * -----------------------------------------------------
 */

const MIN = 10;
const MAX = 50;

$x = 10;


if ($x > MIN AND $x < MAX) {
    echo "+";
} elseif ($x == MIN OR $x == MAX) {
    echo "+-";
} else {
    echo "-";
}


<?php
/* -----------------------------------------------------
 * 
 * Course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * Lesson 3. Data type. 
 * https://php-start.com/lesson/php-start-theory/data-types
 * 
 * Task 1. Types of variables.
 * 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 20.02.2022
 * 
 * Materials:
 * https://www.php.net/manual/ru/language.variables.php
 * 
 * -----------------------------------------------------
 */

// Variables definition
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

// Print variables type and value
echo 'Переменные:<br>';
echo '-$a имеет тип ' . gettype($a) . ' и значение ' . var_export($a, true) . '.<br>';
echo '-$b имеет тип ' . gettype($b) . ' и значение ' . var_export($b, true) . '.<br>';
echo '-$c имеет тип ' . gettype($c) . ' и значение ' . var_export($c, true) . '.<br>';
echo '-$d имеет тип ' . gettype($d) . ' и значение ' . var_export($d, true) . '.<br>';
echo '-$e имеет тип ' . gettype($e) . ' и значение ' . var_export($e, true) . '.<br>';
echo '-$f имеет тип ' . gettype($f) . ' и значение ' . var_export($f, true) . '.<br>';
echo '-$g имеет тип ' . gettype($g) . ' и значение ' . var_export($g, true) . '.<br>';
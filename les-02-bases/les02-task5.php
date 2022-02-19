<?php
// -----------------------------------------------------
// PHP Start | Theory
// Lesson 2. https://php-start.com/lesson/php-start-theory/basics
// 
// Task 5. Constants.
// -----------------------------------------------------

/* 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 19.02.2022
 * 
 * https://www.php.net/manual/ru/language.constants.php
 */

define("YEAR_WAR_BEGAN", 41);
const GLORIOUS_THIRTIETH_ANNIVERSARY  = 31;

$abandYear = YEAR_WAR_BEGAN + GLORIOUS_THIRTIETH_ANNIVERSARY;
print("The year of abandonment of the 'gold standard': $abandYear.");

/*
 * if
 *     YEAR_WAR_BEGAN = 39;
 * then - error: unexpeted '='
 */
?>
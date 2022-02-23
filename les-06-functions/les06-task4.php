<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 6. Functions. 
 * @link: https://php-start.com/lesson/php-start-theory/user-functions
 * 
 * @task 4. Removing negative elements from the array (option 2).
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 23.02.2022
 * 
 * @link: https://www.php.net/manual/ru/language.references.whatdo.php
 * @link: https://www.php.net/manual/ru/functions.arguments.php
 * 
 * -----------------------------------------------------
 */

$digits = [2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95];
var_dump($digits);
 
degNeg($digits);
var_dump($digits);

// function block
function degNeg(&$dig = null) {
    if(is_array($dig)) {
        foreach($dig as $key => $val) {
            if($val <= 0) {
                unset($dig[$key]);
            }
        }
    } else {
        echo 'Ошибка: Передан не массив.';
    }    
}

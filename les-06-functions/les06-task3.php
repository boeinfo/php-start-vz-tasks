<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 6. Functions. 
 * @link: https://php-start.com/lesson/php-start-theory/user-functions
 * 
 * @task 3. Removing negative elements from the array (option 1).
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 23.02.2022
 * 
 * @link: https://www.php.net/manual/ru/language.functions.php
 * 
 * -----------------------------------------------------
 */

$digits = [2, 10, -2, 4, 5, -1, 6, 200, 1.6, 95];
var_dump($digits, true);

/*
$d = [3, 2.9, -3.1, 3, -5, 8, 2];
var_dump($d);
var_dump(degNeg($d));
*/

$d = degNeg($digits);
var_dump($d);

// function block
function degNeg($dig = null) {
    if(is_array($dig)) {
        foreach($dig as $key => $val) {
            if($val <= 0) {
                unset($dig[$key]);
            }
        }
        return $dig;
    } else {
        return false;
    }    
}
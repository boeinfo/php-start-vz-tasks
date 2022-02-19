<?php
/* -----------------------------------------------------
 * 
 * Course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * Lesson 3. Data type. 
 * https://php-start.com/lesson/php-start-theory/data-types
 * 
 * Task 4. Arrays.
 * 
 * Student: Oleg Baranchikov (boeinfo@ya.ru)
 * Date: 20.02.2022
 * 
 * Materials:
 * https://www.php.net/manual/ru/language.types.array.php
 * 
 * -----------------------------------------------------
 */

$arr1 = array('Санкт-Питербург','Глазго','Оттава','Албукерке','Ереван');
$arr2 = ['Нарофоминск','Коломна','Абакан','Нерюнгри','Иркутск'];

echo "<pre>";
print_r($arr1);
print_r($arr2);
echo "</pre><br>";

$arr1['element'] = 'Нью-Йорк';

unset($arr2[0]);

echo "<pre>";
print_r($arr1);
print_r($arr2);
echo "</pre><br>";

echo $arr1[1].", ".$arr2[1]."<br>";
echo "<br>";

print(implode(", ", $arr1));
echo "<br>";
print(implode(", ", $arr2));
echo "<br>";
echo "<br>";

echo count($arr1);
echo "<br>";
echo count($arr2);
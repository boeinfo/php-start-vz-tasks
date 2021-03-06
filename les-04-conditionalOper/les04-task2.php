<?php
/* -----------------------------------------------------
 * 
 * Course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * Lesson 4. Conditional operators. 
 * https://php-start.com/lesson/php-start-theory/data-types
 * 
 * Task 2. The quadratic equation.
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

//Коэффициенты уравнения
$a; $b; $c;
//Дискриминант и корни уравнения
$d; $x1; $x2;

$a=1; $b=15; $c=56;

echo "Решаем полное квадратное уравнение:<br>";
echo "{$a}x<sup>2</sup> + {$b}x + {$c} = 0<br>";
echo "<br>";

if ($a==0 OR $b==0 OR $c==0) {
    echo "а неполное другой раз.<br>";
} else {

    $d = pow($b, 2) - 4*$a*$c;
    echo "дискриминант D = {$d}.<br>";

    if ($d < 0) {
        echo "D < 0 - уравнение не имеет корней.<br>";
    } elseif ($d == 0) {
        echo "D = 0 - уравнение имеет один корень:<br>";
        $x1 = -$b / (2 * $a);
        echo "x<sub>1</sub> = {$x1}.<br>";
    } elseif ($d > 0) {
        echo "D > 0 - уравнение имеет два корня:<br>";
        $x1 = round( (-$b + sqrt($d)) / (2 * $a) , 2);
        $x2 = round( (-$b - sqrt($d)) / (2 * $a) , 2);
        echo "x<sub>1</sub> = {$x1}, x<sub>2</sub> = {$x2}.<br>";
    }
}
echo "как-то так...";
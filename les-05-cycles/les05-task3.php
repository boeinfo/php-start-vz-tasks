<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 5. Cycles. 
 * @link: https://php-start.com/lesson/php-start-theory/cycles
 * 
 * @task 3. Site menu.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 20.02.2022
 * 
 * @link: https://www.php.net/manual/ru/control-structures.foreach.php
 * 
 * -----------------------------------------------------
 */

$button = array();

for($i=10; $i>=1; $i--) {
    $button[$i] = "Button {$i}";
}
// var_dump($button);
natsort($button);
//var_dump($button);

echo "<ul>";
foreach($button as $elem) {
    echo "<li><a href=\"#\">".$elem."</a></li>";
}
echo "</ul>";
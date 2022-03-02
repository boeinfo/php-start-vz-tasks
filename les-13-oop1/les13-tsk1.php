<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 13. OOP. 
 * @link: https://youtu.be/rK_-skwntME?list=PLSdH7dYnlGYgrWg5wsEG4v03MiJ1WSOTx
 * 
 * @task 1. Introduction to OOP.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 02.03.2022

 * -----------------------------------------------------
 */


Class Car {
    public $color = "white";
    public $speed;
    public $fuel;
    public $brand;
    public $doors_quant;
    public $price;
    public $discount;
}

$car1 = new Car;
$car->brand = "Audi";
$car->speed = 110;
$car->fuel = 12;

$car2 = new Car;
$car->brand = "Mers";
$car->speed = 150;
$car->fuel = 14;
$car->color = "black";

$car3 = new Car;


?>
<!--
<html>
    <head>
        <title></title>
    </head>
    <body>

    </body>
</html>
-->
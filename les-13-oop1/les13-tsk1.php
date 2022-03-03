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
 * @date: 03.03.2022

 * -----------------------------------------------------
 */

Class Car {
    const AXIS = 2;
    const WINDOWS = 5;
    const VALVE = 12;
    
    public $brand;
    public $mark;
    public $fuel;
    public $speedAverage;
    public $color;
    public $doorsQuant;
    public $discount = 0.1;
    public $price;
    
    public function __construct($brand="", $mark="", $fuel = 10, 
            $speedAverage = 120, $color = "white", $doorsQuant = 4)
    {
        $this->brand = $brand; $this->mark = $mark; $this->fuel = $fuel;
        $this->speedAverage = $speedAverage; $this->color = $color; 
        $this->doorsQuant = $doorsQuant;
    }
    
    public function fuelConsuption($distance) 
    {
        $fl = round(($distance * $this->fuel) / 100, 2);
        $info = "<p>Auto {$this->brand} {$this->mark} will spend ".
                "<b>{$fl} liters </b>".
                "on driving {$distance} km.</p>";
        return $info;
    }
    
    public static function getMaxConstant()
    {
        return max(self::AXIS, self::WINDOWS, self::AXIS);
    }
    
}

$car1 = new Car();
$car1->brand = "Mers";
$car1->mark = "E221";
$car1->fuel = 15;
echo $car1->fuelConsuption(1000);

$car2 = new Car();
$car2->brand = "Volvo";
$car2->mark = "S90";
$car2->fuel = 13;
echo $car2->fuelConsuption(1000);

$car3 = new Car("Audi", "A6");
echo $car3->fuelConsuption(1000);

$car4 = new Car("Toyota", "Prado", 12, 140, "grey");
echo $car4->fuelConsuption(1000);

echo "<br> Max value is: ".Car::getMaxConstant()."<br>";

?>
<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 13. OOP. 
 * @link: https://youtu.be/T73ieFL3g2g?list=PLSdH7dYnlGYgrWg5wsEG4v03MiJ1WSOTx
 * 
 * @task 1. Inheritance, encapsulation.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 04.03.2022

 * -----------------------------------------------------
 */

// Figure
class Figure {
    const SIDES_COUNT = 1;
    
    public $area;
    public $color;
    
    public function infoAbout() 
    {
        return "It's a geometric shape";
    }
}

// Rectangle
class Rectangle extends Figure {
    
    const SIDES_COUNT  = 4;

    private $a;
    private $b;
    
    public function __construct($a = 0, $b = 0) {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function getArea() {
        return $this->a * $this->b;
    }
    
    final public function infoAbout() 
    {
        return parent::infoAbout().": rectangle. It has ".
                self::SIDES_COUNT ." sides.";
    }
}

//Square
class Square extends Figure {
    
    const SIDES_COUNT  = 4;

    private $a;
    
    public function __construct($a = 0) {
        $this->a = $a;
    }
    
    public function getArea() {
        return $this->a * $this->a;
    }
    
    final public function infoAbout() 
    {
        return parent::infoAbout().": square. It has ".
                self::SIDES_COUNT ." sides.";
    }
}


//Triangle
class Triangle extends Figure {
    
    const SIDES_COUNT  = 3;

    private $a;
    private $b;
    private $c;
    
    public function __construct($a = 0, $b = 0, $c = 0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function getArea() {
        
        $p = ($this->a + $this->b + $this->c) / 2;
        $area = sqrt($p*($p - $this->a)*($p - $this->b)*($p - $this->c));
        
        return $area;
    }
    
    final public function infoAbout() 
    {
        return parent::infoAbout().": triangle. It has ".
                self::SIDES_COUNT ." sides.";
    }
}



//$f1 = new Figure;
$r1 = new Rectangle(4,5);
$s1 = new Square(5);
$t1 = new Triangle(3,4,5);

//echo $f1->infoAbout().".<br>";
echo $r1->infoAbout()."<br>";
echo "And its area is equal to: ".$r1->getArea()." .<br>";
echo "<br>";

echo $s1->infoAbout()."<br>";
echo "And its area is equal to: ".$s1->getArea()." .<br>";
echo "<br>";

echo $t1->infoAbout()."<br>";
echo "And its area is equal to: ".$t1->getArea()." .<br>";
echo "<br>";

echo "<hr>";

$r2 = new Rectangle(49,4);
$s2 = new Square(14);
$t2 = new Triangle(30,40,50);        
        
echo "And its area is equal to: ".$r2->getArea()." .<br>";
echo "And its area is equal to: ".$s2->getArea()." .<br>";
echo "And its area is equal to: ".$t2->getArea()." .<br>";



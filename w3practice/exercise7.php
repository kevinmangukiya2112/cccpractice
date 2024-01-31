<?php
 class Shape {
    public $dimentions="360%";
}

class Circle extends Shape {
    public $radius;

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends Shape {
    public $length;
    public $width;

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Example Usage:
$shap=new shape();
$circle = new Circle();
$circle->radius = 10;

$rectangle = new Rectangle();
$rectangle->length = 5;
$rectangle->width = 6;

echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Total Dimentions=";
print_r($shap->dimentions);
echo"<br>";
echo "<hr>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "Total Dimentions=";
print_r($shap->dimentions);
echo"<br>";

?>
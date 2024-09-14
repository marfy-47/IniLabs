<?php

class Shape {
    public function area() {
        return 0; 
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function __construct($sideLength) {
        // A square is a rectangle with equal width and height
        parent::__construct($sideLength, $sideLength);
    }
}

// Example usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$square = new Square(3);

echo "Circle area: " . $circle->area() . "\n";
echo "Rectangle area: " . $rectangle->area() . "\n";
echo "Square area: " . $square->area() . "\n";

?>

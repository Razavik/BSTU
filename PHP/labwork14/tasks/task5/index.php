<?php
interface Figure
{
    public function getArea();
    public function getPerimeter();
}

class Circle implements Figure
{
    private $radius;
    private $color;

    public function __construct($radius, $color = 'black')
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Figure
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

class Triangle implements Figure
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea()
    {
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(10, 5);
$triangle = new Triangle(3, 4, 5);

echo "Круг: Площадь = {$circle->getArea()}, Периметр = {$circle->getPerimeter()}<br>";
echo "Прямоугольник: Площадь = {$rectangle->getArea()}, Периметр = {$rectangle->getPerimeter()}<br>";
echo "Треугольник: Площадь = {$triangle->getArea()}, Периметр = {$triangle->getPerimeter()}<br>";

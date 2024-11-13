<?php
class Car
{
    private $brand;
    private $model;
    private $year;
    private $price;

    public function __construct($brand, $model, $year, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function displayInfo()
    {
        echo "Марка: {$this->brand}, Модель: {$this->model}, Год выпуска: {$this->year}, Цена: {$this->price}<br>";
    }

    public function calculatePrice()
    {
        $age = date("Y") - $this->year;
        $newPrice = $this->price * pow(0.99, $age);
        return round($newPrice, 2);
    }
}

$car1 = new Car('Toyota', 'Corolla', 2015, 15000);
$car2 = new Car('BMW', 'X5', 2018, 50000);
$car3 = new Car('Ford', 'Focus', 2020, 20000);

$car1->displayInfo();
echo "Цена с учетом возраста: " . $car1->calculatePrice() . "<br><br>";

$car2->displayInfo();
echo "Цена с учетом возраста: " . $car2->calculatePrice() . "<br><br>";

$car3->displayInfo();
echo "Цена с учетом возраста: " . $car3->calculatePrice() . "<br><br>";
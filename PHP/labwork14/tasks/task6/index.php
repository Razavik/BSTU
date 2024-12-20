<?php
// Принципы: инкапсуляция, наследование, полиморфизм, абстракция
abstract class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        return "УУУУУ!";
    }
}

class Dog extends Animal
{
    public function speak()
    {
        return "Гав!";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        return "Мяу!";
    }
}

$dog = new Dog("Бобик");
$cat = new Cat("Мурка");

echo $dog->speak();
echo $cat->speak();
<?php
class Student
{
    private $name;
    private $age;
    private $group;
    private $grades = [];

    public function __construct($name, $age, $group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
    }

    public function addGrade($grade)
    {
        $this->grades[] = $grade;
    }

    public function getAverageGrade()
    {
        if (count($this->grades) == 0)
            return 0;
        return array_sum($this->grades) / count($this->grades);
    }

    public function displayInfo()
    {
        $average = $this->getAverageGrade();
        echo "Средний балл студента {$this->name} из группы {$this->group} равен {$average}.<br>";
    }
}

$student1 = new Student('Иван', 20, 'A1');
$student1->addGrade(4);
$student1->addGrade(5);
$student1->addGrade(3);
$student1->displayInfo();

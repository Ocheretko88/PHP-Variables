<?php

/**  Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.

Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.

Создайте объект этого класса "Иван", возраст 25, зарплата 1000. Создайте второй объект этого класса "Вася", возраст 26, зарплата 2000. Найдите сумму зарплат Ивана и Васи.

Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C). */

class User
{
    protected string $name;
    protected int $age;

    public function setName(string $setName): string
    {
        $this->name = $setName;
        return $setName;
    }

    Public function getName(string $getName): string
    {
       $this->name = $getName;
        return $getName;
    }

    public function setAge(string $setAge): string
    {
        $this->age = $setAge;
        return $setAge;
    }
    public function getAge(string $getAge): string
    {
        $this->age = $getAge;
        return $getAge;
    }
}
class Worker extends User
{
    private int $salary;

    public function getSalary(string $getSalary): int
    {
        $this->salary = $getSalary;
        return $this->salary;
    }
    public function setSalary(string $setSalary): int
    {
        $this->salary = $setSalary;
        return $this->salary;
    }
}

$newMan = new Worker();
$newMan2 = new Worker();
echo PHP_EOL, $newMan->setName('Ivan'), PHP_EOL, 'is', PHP_EOL, $newMan->getAge('25'),". He earns ", $newMan->setSalary('1000'), ".";
echo PHP_EOL, $newMan2->setName('Ivan'), PHP_EOL,'is', PHP_EOL, $newMan2->getAge('26'),". He earns ", $newMan2->setSalary('2000'), ".";
echo PHP_EOL, "Their salary is ", PHP_EOL, $newMan->setSalary('1000') + $newMan2->setSalary('2000'), ".", PHP_EOL;

class Student extends User
{
    private $scholarship;
    private $course;

    public function scholarship(int $scholarship): int
    {
        $this->scholarship = $scholarship;
        return $this->scholarship;
    }
    public function course(string $course): string
    {
        $this->course = $course;
        return $this->course;
    }
}
$newStudent = new Student();
echo "A new student has this scholarship:", PHP_EOL, $newStudent->scholarship('2'),".", PHP_EOL, "He studies at the", PHP_EOL, $newStudent->course('1st grade');

class Driver extends Worker
{
    private $experience;
    private $drivingCategory;

    public function experience(string $experience): string
    {
        $this->experience = $experience;
        return $this->experience;
    }
    public function  drivingCategory(string $drivingCategory)
    {
    $this->drivingCategory = $drivingCategory;
    return $this->drivingCategory;
    }
}

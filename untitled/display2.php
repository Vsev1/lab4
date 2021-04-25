<?php

$car1 = new Car("Mercedes", 4);
$car1 -> doSomething();
$plane1 = new Plane("SkyUp", 2, 2);
$plane1 -> doSomething();

abstract class Machine
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function __destruct() { }

    function doSomething() { echo "$this->name робить щось<br>"; }
}
class Car extends Machine
{
    private $wheels;

    function __construct($name, $wheels)
    {
        parent::__construct($name);
        $this->wheels = $wheels;
    }

    function __destruct() { echo "Знищуємо об'єкт класу Car<br>";}

    function doSomething() { echo "$this->name їздить. Він має $this->wheels колес.<br>"; }
}

class Plane extends Machine
{
    private $wheels;
    private $wings;

    function __construct($name, $wheels, $wings)
    {
        parent::__construct($name);
        $this->wheels = $wheels;
        $this->wings = $wings;
    }

    function __destruct() { echo "Знищуємо об'єкт класу Plane<br>";}


    function doSomething() { echo "$this->name літає. Він має $this->wheels колес та $this->wings крила.<br>"; }
}





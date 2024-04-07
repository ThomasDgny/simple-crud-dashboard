<?php

class Car
{
    private $modal;
    private $year;
    private $color;
    private $type = 'car';

    function __construct($modal, $year, $color)
    {
        $this->modal = $modal;
        $this->year = $year;
        $this->color = $color;
    }

    public function updateCar($prop, $newColor)
    {
        return $this->$prop = $newColor;
    }

    public function getCarInfo()
    {
        return "the modal of car is $this->modal and year is $this->year and color $this->color";
    }
}


$mercedes = new Car('Mercedes', 2022, 'Black');

print_r($mercedes);
echo '<br>';
echo $mercedes->getCarInfo();

$mercedes->updateCar('year', 2000);
echo '<br>';
print_r($mercedes);
echo '<br>';
echo $mercedes->getCarInfo();

class Calc
{
    private $current;

    function __construct($current)
    {
        $this->current = $current;
    }

    function inc()
    {
        $this->current++;
    }

    function dec()
    {
        $this->current--;
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

$calc = new Calc(0);
print_r($calc);

echo '<br>';

$calc->inc();
$calc->inc();

echo '<br>';

print_r($calc);

echo '<br>';

$calc->dec();

echo '<br>';

print_r($calc);

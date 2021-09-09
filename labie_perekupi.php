<?php

// autoplacis = objekts kas sastav no objektiem(Car) un kuram ir metodes kuras var pardot un rentot objektus Car.

class Car
{
    private string $make;
    private string $model;
    private int $year;
    private int $priceToBuy;
    private int $priceToRent;

    public function __construct(string $make, string $model, string $year, int $priceToBuy, int $priceToRent)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->priceToBuy = $priceToBuy;
        $this->priceToRent = $priceToRent;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getPriceToBuy(): int
    {
        return $this->priceToBuy;
    }

    public function getPriceToRent(): int
    {
        return $this->priceToRent;
    }
}

class Buyer
{
    private string $name;
    private int $money;

    public function __construct(string $name, int $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function getBuyerName(): string
    {
        return $this->name;
    }

    public function getBuyerMoney(): int
    {
        return $this->money;
    }
}

class Placis
{
    private array $cars;

    public function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    public function displayCars()
    {
        foreach($this->cars as $key => $car)
        {
            echo "{$key} {$car->getMake()} {$car->getModel()}, {$car->getYear()}, {$car->getPriceToBuy()}" . PHP_EOL;
        }
    }
}


$john = new Buyer("John", 999999999);

$placis = new Placis([new Car("Toyota", "Avensis", 2009, 3000000, 30000),
    new Car("Mazda", "3", 2011, 2000000, 20000),
    new Car("Opel", "Vectra", 2002, 100000, 10000)
    ]);

echo "Welcome to LPauto, {$john->getBuyerName()}! The cars we have available are: " . PHP_EOL;
$placis->displayCars();

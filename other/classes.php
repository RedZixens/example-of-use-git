<?php

declare(strict_types=1);

class SuperHero
{
    public function __construct(private string $name, public array $powers, public string $planet) {}

    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }

    public function showAll()
    {
        return get_object_vars($this);
    }

    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }

    public static function random()
    {
        $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Superfuerza", "Volar", "Rayos laser"],
            ["Superfuerza", "Super agilidad", "Telarañas"],
            ["Regeneración", "Superfuerza", "Garras de adamantium"],
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Super agilidad", "Cambio de tamaño"],
        ];
        $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

// $hero = new SuperHero("Superman", ["Superfueza", "rayos láser", "vuelo"], "Krypton");
// echo $hero->description();

// var_dump($hero->showAll());

$hero = SuperHero::random();
echo $hero->description();
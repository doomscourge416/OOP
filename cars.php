<?php

interface Automotive {
    public function Ride(int $speedIncrease);
    public function SpecialAbility(); 
}

abstract class Transport implements Automotive{
    protected $speed = 0;
    protected $hornSound = "Beep!";
    protected $wiperState = false;
    protected $interior = "Standart";

    public function Ride(int $speedIncrease){
        $this->speed += $speedIncrease;
        echo "Transport is riding {$this->speed} km/h . </br>";
    }

    public function Honk(){
        echo "Transport Honk with {$this->$hornSound} sound. </br> ";
    }

    public function ToggleWipers(){
        $this->wiperState = !$this->wiperState;
        echo "Wipers are now " . ($this->wipersState ? "on" : "off") . ".</br>";
    }

    public function SetInteriot($interiorType){
        $this->interior = $interiorType;
        echo "Transport interior is {$this->interior}.";
    }

    abstract public function SpecialAbility();
}

class Car extends Transport {
    public function SpecialAbility() {
        $this->speed += 20; // TNitrous inccreasing the speed.
        echo "Car used Nitrous. Speed increased to {$this->speed} km/h.<br>";
    }
}

class Tank extends Transport {
    public $hornSound = "No Horn";
    public $interior = "Military(Armor)";
    public function SpecialAbility() {
        echo "Tank spins the weapon.<br>";
    }
}

class Bulldozer extends Transport {
    public $hornSound = "Very loud and annoing";
    public $interior = "Simple and Efficient";

    public function SpecialAbility() {
        echo "Bulldozer operates the bucket.<br>";
    }
}

function StartVehicle(Automotive $vehicle) {
    echo "Moving the vehicle forward:<br>";
    $vehicle->Ride(10); 
    echo "Activating the vehicle's special ability:<br>";
    $vehicle->SpecialAbility(); 
}

$tank = new Tank();
StartVehicle($tank);
$tank->SpecialAbility();

$car = new Car();
StartVehicle($car);
$car->SpecialAbility();

$bulldozer = new Bulldozer();
StartVehicle($bulldozer);
$bulldozer->SpecialAbility();


?>
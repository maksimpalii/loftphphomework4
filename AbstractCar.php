<?php
require 'EngineWork_Intrface.php';

abstract class AbstractCar implements EngineWork_Intrface
{

    protected $name;
    private $speed;
    private $direction;
    private $distance;
    protected $temperatur;

    public function __construct($name = 'Niva')
    {
        $this->name = $name;
    }

    public function MoveCar($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
        $this->GetHorsePower();
        if ($speed > 0) {
            $this->Engine();
        } else {
            $this->EngineOff();
        }
    }

    public function TransReverse()
    {
        if ($this->GetDirection() === false) {
            echo 'Включаете передачу назад ' . PHP_EOL;
        }
    }

    public function GetHorsePower()
    {
        echo 'Двигатель: ' . $this->GetSpeed() / 2 . ' лошадиных сил' . PHP_EOL;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetSpeed()
    {
        return $this->speed;
    }

    public function GetDistance()
    {
        return $this->distance;
    }

    public function GetDirection()
    {
        return $this->direction;
    }

    public function EngineStart()
    {
        echo 'Вы включаете двигатель' . PHP_EOL;
    }

    public function EngineStop()
    {
        echo 'Выключаете двигатель' . PHP_EOL;
    }

    private function Cooler($temperatur)
    {
        echo 'Температура двигателя :' . $temperatur . PHP_EOL;
        if ($temperatur == 90) {
            echo 'Включить куллер' . PHP_EOL;
            $this->temperatur = 80;
        }
    }

    public function EngineWork()
    {
        $distance = $this->GetDistance();
        for ($distanceNull = 0, $this->temperatur = 0; $distanceNull <= $distance; $distanceNull += 10, $this->temperatur += 5) {
            echo 'Машина проехала:  ' . $distanceNull . PHP_EOL;
            echo $this->Cooler($this->temperatur) . PHP_EOL;
            if ($distanceNull === $distance) {
                $this->EngineStop();
            }
        }
    }

    public function EngineOff()
    {
        echo 'Двигатель не включен' . PHP_EOL;
    }


}
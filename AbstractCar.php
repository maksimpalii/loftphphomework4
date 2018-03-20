<?php
require 'Mechanism.php';

abstract class AbstractCar
{
    use Mechanism;
    protected $name;
    private $speed;
    private $direction;
    private $distance;
    protected $temperatur;

    public function __construct($name = 'Niva')
    {
        $this->name = $name;
    }

    public function moveCar($distance, $speed, $direction)
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
}
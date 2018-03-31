<?php
require_once 'EngineWorkIntrface.php';

abstract class AbstractCar implements EngineWorkIntrface
{

    protected $name;
    private $speed;
    private $direction;
    private $distance;
    protected $temperatur;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function moveCar($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
        $this->getHorsePower();
        if ($speed > 0) {
            $this->engine();
        } else {
            $this->engineOff();
        }
    }

    public function transReverse()
    {
        echo 'Включаете передачу назад ' . PHP_EOL;
    }

    public function getHorsePower()
    {
        echo 'Двигатель: ' . $this->getSpeed() / 2 . ' лошадиных сил' . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function engineStart()
    {
        echo 'Вы включаете двигатель' . PHP_EOL;
    }

    public function engineStop()
    {
        echo 'Выключаете двигатель' . PHP_EOL;
    }

    private function cooler($temperatur)
    {
        echo 'Температура двигателя :' . $temperatur . PHP_EOL;
        if ($temperatur == 90) {
            echo 'Включить куллер' . PHP_EOL;
            $this->temperatur = 80;
        }
    }

    public function engineWork()
    {
        $distance = $this->getDistance();
        for ($distanceNull = 0, $this->temperatur = 0; $distanceNull <= $distance; $distanceNull += 10, $this->temperatur += 5) {
            echo 'Машина проехала:  ' . $distanceNull . PHP_EOL;
            echo $this->cooler($this->temperatur) . PHP_EOL;
            if ($distanceNull === $distance) {
                $this->engineStop();
            }
        }
    }

    public function engineOff()
    {
        echo 'Двигатель не включен' . PHP_EOL;
    }


}
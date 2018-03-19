<?php
require 'AbstractCar.php';
require 'EngineWork_Intrface.php';

class Niva extends AbstractCar implements EngineWork_Intrface
{

    public function Engine()
    {
        $this->EngineStart();
        $this->TransmissionAuto();
        //$this->TransmissionManual();
        $this->EngineWork();

    }

    public function EngineStart()
    {
        echo 'Вы включаете двигатель' . PHP_EOL;
    }

    public function EngineStop()
    {
        echo 'Выключаете двигатель' . PHP_EOL;
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

    private function Cooler()
    {
        echo 'Температура двигателя :' . $this->temperatur . PHP_EOL;
        if ($this->temperatur == 90) {
            echo 'Включить куллер' . PHP_EOL;
            $this->temperatur = 80;
        }
    }
}

$Niva = new Niva();
echo $Niva->GetName() . PHP_EOL;
$Niva->moveCar(200, 10, 'вперед');
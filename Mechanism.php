<?php
require 'MoveDirection.php';
trait Mechanism
{
    use MoveDirection;

    abstract public function Engine();

    public function GetHorsePower()
    {
        echo 'Двигатель: ' . $this->GetSpeed() / 2 . ' лошадиных сил' . PHP_EOL;
    }

    public function TransmissionAuto()
    {
        $this->MoveDirection();
    }

    public function TransmissionManual()
    {
        $this->MoveDirection();
        $speed = $this->GetSpeed();
        if ($speed > 0 && $speed <= 20) {
            echo 'Включаем 1-ю передачу' . PHP_EOL;
        } else {
            echo 'Включаем 2-ю передачу' . PHP_EOL;
        }
    }
}
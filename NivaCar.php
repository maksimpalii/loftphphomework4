<?php
require 'AbstractCar.php';
require 'TransmissionAuto.php';
require 'TransmissionManual.php';


class Niva extends AbstractCar
{
    use TransmissionManual;

    public function engine()
    {
        $this->engineStart();
        if ($this->getDirection() === false) {
            $this->transReverse();
        } else {
            $this->transForward();
        }
        $this->engineWork();
    }

}

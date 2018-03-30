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
        $this->transReverse();
        $this->transForward();
        $this->engineWork();
    }

}

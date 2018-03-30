<?php
require 'AbstractCar.php';
require 'TransmissionAuto.php';
require 'TransmissionManual.php';


class Volga extends AbstractCar
{
    use TransmissionAuto;

    public function engine()
    {
        $this->engineStart();
        $this->transReverse();
        $this->transForward();
        $this->engineWork();
    }

}

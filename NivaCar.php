<?php
require 'AbstractCar.php';
require 'TransmissionAuto.php';
require 'TransmissionManual.php';


class Niva extends AbstractCar
{
    //use TransmissionAuto;
    use TransmissionManual;

    public function Engine()
    {
        $this->EngineStart();
        $this->TransReverse();
        $this->TransForward();
        $this->EngineWork();
    }

}

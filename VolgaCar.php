<?php
require_once 'AbstractCar.php';
require_once 'TransmissionAuto.php';
require_once 'TransmissionManual.php';


class Volga extends AbstractCar
{
    use TransmissionAuto;

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

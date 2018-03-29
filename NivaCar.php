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
        if (method_exists(self::class, 'TransAuto')) {
            $this->TransAuto($this->GetDirection());
        }
        if (method_exists(self::class, 'TransManual')) {
            $this->TransManual($this->GetDirection(), $this->GetSpeed());
        }
        $this->EngineWork();
    }
}

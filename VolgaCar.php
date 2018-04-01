<?php
require_once 'AbstractCar.php';
require_once 'TransmissionAuto.php';
require_once 'TransmissionManual.php';


class Volga extends AbstractCar
{
    use TransmissionAuto;


}

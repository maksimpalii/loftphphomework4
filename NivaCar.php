<?php
require_once 'AbstractCar.php';
require_once 'TransmissionAuto.php';
require_once 'TransmissionManual.php';


class Niva extends AbstractCar
{
    use TransmissionManual;



}

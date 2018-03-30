<?php
require_once 'NivaCar.php';
require_once 'VolgaCar.php';

$Niva = new Niva('Нива 2121');
echo $Niva->getName() . PHP_EOL;
$Niva->moveCar(200, 20, true);

$Volga = new Volga('ГАЗ-24');
echo $Volga->getName() . PHP_EOL;
$Volga->moveCar(100, 10, true);
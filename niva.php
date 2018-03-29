<?php
require_once 'NivaCar.php';

$Niva = new Niva('Нива 2121');
echo $Niva->GetName() . PHP_EOL;
$Niva->moveCar(200, 25, true);

<?php
require_once 'NivaCar.php';

$Niva = new Niva('Нива 2121');
echo $Niva->GetName() . PHP_EOL;
$Niva->MoveCar(200, 20, true);

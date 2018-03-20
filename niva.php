<?php
require_once 'NivaCar.php';
try {
    $Niva = new Niva();
    echo $Niva->GetName() . PHP_EOL;
    $Niva->moveCar(200, 10, 'назад');
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
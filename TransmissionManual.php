<?php

trait TransmissionManual
{
    public function TransManual($direction, $speed)
    {
        if ($direction === true) {
            echo 'Включаете передачу вперед ' . PHP_EOL;
            if ($speed > 0 && $speed <= 20) {
                echo 'Включаем 1-ю передачу' . PHP_EOL;
            } else {
                echo 'Включаем 2-ю передачу' . PHP_EOL;
            }
        } else {
            echo 'Включаете передачу назад ' . PHP_EOL;
        }
    }
}
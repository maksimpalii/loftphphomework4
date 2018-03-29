<?php

trait TransmissionAuto
{
    public function TransAuto($direction)
    {
        if ($direction === true) {
            echo 'Включаете передачу вперед ' . PHP_EOL;
        } else {
            echo 'Включаете передачу назад ' . PHP_EOL;
        }
    }
}
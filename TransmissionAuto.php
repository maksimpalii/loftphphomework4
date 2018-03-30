<?php

trait TransmissionAuto
{
    public function transForward()
    {
        if ($this->getDirection() === true) {
            echo 'Включаете передачу вперед ' . PHP_EOL;
        }
    }
}
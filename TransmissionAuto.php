<?php

trait TransmissionAuto
{
    public function TransForward()
    {
        if ($this->GetDirection() === true) {
            echo 'Включаете передачу вперед ' . PHP_EOL;
        }
    }
}
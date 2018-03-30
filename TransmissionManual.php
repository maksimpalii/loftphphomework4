<?php

trait TransmissionManual
{
    public function TransForward()
    {
        if ($this->GetDirection() === true) {
            echo 'Включаете передачу вперед ' . PHP_EOL;
            if ($this->GetSpeed() > 0 && $this->GetSpeed() <= 20) {
                echo 'Включаем 1-ю передачу' . PHP_EOL;
            } else {
                echo 'Включаем 2-ю передачу' . PHP_EOL;
            }
        }
    }
}
<?php

trait TransmissionManual
{
    public function transForward()
    {
        echo 'Включаете передачу вперед ' . PHP_EOL;
        if ($this->getSpeed() > 0 && $this->getSpeed() <= 20) {
            echo 'Включаем 1-ю передачу' . PHP_EOL;
        } else {
            echo 'Включаем 2-ю передачу' . PHP_EOL;
        }
    }
}
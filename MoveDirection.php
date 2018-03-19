<?php
trait MoveDirection
{
    public function MoveDirection()
    {
        switch ($this->GetDirection()) {
            case 'назад':
                echo 'Включаете передачу назад ' . PHP_EOL;
                break;
            case 'вперед':
                echo 'Включаете передачу вперед ' . PHP_EOL;
                break;
        }
    }
}
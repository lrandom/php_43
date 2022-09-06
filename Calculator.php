<?php

class Calculator
{
    public function add()
    {
        $totalArgs = func_num_args();
        switch ($totalArgs) {
            case 2:
                $args = func_get_args();
                return $args[0] + $args[1];
            case 3:
                $args = func_get_args();
                return $args[0] + $args[1] + $args[2];
        }
    }
}

$calculator = new Calculator();
echo $calculator->add(10, 20);
echo $calculator->add(10.0, 20.9);
echo $calculator->add(20, 30, 40);
<?php

//abstract class
abstract class ITransporter
{
    //non-abstract method
    public function stop()
    {
        echo "Stop";
    }

    //abstract method
    public abstract function start();

    public abstract function fillFuel();
}


//Ghi đè phuong thức -> override
class Transporter extends ITransporter
{
    static $engine = "V8";

    public function running()
    {
        echo "Running";
    }

    public static function fly()
    {
        echo "Fly";
    }

    public function start()
    {
        echo "Start";
    }

    public function fillFuel()
    {
        echo "fill fuel";
    }

}

class Car extends Transporter
{
    public function running()
    {
        echo "Car Running";
    }
}

$toyota = new Car();
$toyota->running();//Car Running

Transporter::fly();
Transporter::$engine;
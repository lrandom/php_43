<?php

//Động cơ
interface IEngine
{
    //khởi động động cơ
    public function start();

    //tắt động cơ
    public function stop();
}

//Ngoại thất
interface Exterior
{
    //cài đặt màu sơn
    public function setColor($color);
}

//Nội thất
interface Interior
{
    //cài đặt cửa sổ trời toàn cảnh
    public function setPanoramaDoor($isPanoramaDoor);
}

class Car implements IEngine, Exterior, Interior
{
    private $color;
    private $isPanoramaDoor;

    public function start()
    {
        // TODO: Implement start() method.
        echo "Start Engine";
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo "Stop Engine";
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
        $this->$color = $color;
    }

    public function setPanoramaDoor($isPanoramaDoor)
    {
        // TODO: Implement setPanoramaDoor() method.
        $this->isPanoramaDoor = $isPanoramaDoor
    }
}
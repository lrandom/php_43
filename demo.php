<?php
//từ khoá giới hạn truy cập
//access modifier
//private, public, protected
//tính đóng gói
class Car
{
    private $brand;
    private $model;
    private $type;


    public function setBrand($brandName)
    {
        if (is_string($brandName)) {
            $this->brand = $brandName;
        } else {
            throw new ErrorException('Vui lòng gán giá trị dạng text vào brand');
        }
    }

    public function getBrand()
    {
        return 'hãng ' . $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}

class Truck extends Car
{
    public function setModel($model)
    {
        $this->model = $model;
    }
}

$corollaCross = new Car();
//outside context
$corollaCross->setBrand("toyota");
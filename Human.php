<?php

class Human
{
    var $name;
    var $height;
    var $weight;
    var $hairColor;

    public function __construct($name, $height, $weight, $hairColor)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->hairColor = $hairColor;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    function eat()
    {
        echo $this->name . " đang ăn";
    }

    function sleep()
    {
        echo $this->name . " đang ngủ";
    }
}

//đa kế thừa
//đơn kế thừa-> php
//kế thừa nhiều cấp-> php
//chimera->
class Teacher extends Human
{
    function teaching()
    {
        echo $this->name . " teaching";
    }
}

class Student extends Human
{
    function learning()
    {
        echo $this->name . " learning";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$teacherLuan = new Teacher("Luan", "1.72", "75", "black");
$teacherLuan->teaching();
?>
<br>
<?php

$studentKhoa = new Student("Khoa", "1.82", "75", "white");
$studentKhoa->learning();
?>
</body>
</html>

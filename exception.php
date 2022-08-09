<?php

//customize exception
class DivideForZeroException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("Bạn đang chia cho 0", $code, $previous);
    }


}

function divide($a, $b)
{
    if ($b == 0) {
        throw new DivideForZeroException();
    }
    return $a / $b;
}

try {
    echo divide(20, 0);
} catch (DivideForZeroException $exception) {
    echo $exception->getMessage();
}

echo divide(20, 10);
echo "Hello World";

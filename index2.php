<?php
/*require_once 'sub/A.php';
require_once 'sub/B.php';
require_once 'sub/C.php';*/
/*
spl_autoload_register(function ($className) {
    require_once 'sub/' . $className . '.php';
    echo $className;
});

spl_autoload_register(function ($className) {
    require_once 'sub1/' . $className . '.php';
    echo $className;
});

$a = new A();
$b = new B();
$c = new C();
$d = new D();
$e = new E();
$a->sayHi();
$b->sayHi();
$c->sayHi();
$d->sayHi();
$e->sayHi();*/
require 'sub2/A.php';
require 'sub3/A.php';
$a1 = new sub2\A();
$a2 = new sub3\A();

?>
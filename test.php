<?php
spl_autoload_register(function ($class_name) {
		print($class_name);
    include $class_name . '.php';
});

$a = new MyClass1(); //MyClass1.php
var_dump($a);

$b = new MyClass2();//MyClass2.php
var_dump($b);
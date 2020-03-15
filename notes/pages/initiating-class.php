<?php include('../includes/parts/css.php') ?>

<p>Class can be initiated using a variable</p>

<h5>Example #1</h5>

<pre>
$instance = new SimpleClass(); //basic method

// This can also be done with a variable:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()
</pre>

<h5>Example #2</h5>

<p>Declaring class object "on the fly" </p>

<pre>$x = new stdClass;
$y = (object) null;        // same as above
$z = (object) 'a';         // creates property 'scalar' = 'a'
$a = (object) array('property1' => 1, 'property2' => 'b');

var_dump($z->scalar);

<p>Creating methods using anonymous functions </p>
$x->add = function($first, $second)	{
	//$this is not avaialble
	return $first + $second;
};
echo $x->add(2,3);
</pre>

<p>Note: any class that is not derived from stdClass does not have class name stdClass but the actual class and is parent of none</p>

<h5>Order of declaring classes does not matter</h5>

<p>The following works</p>

<pre>$x = new b();

class b extends a {}

class a {
	function hello()	{
		echo "Hello";
	}
}

$x->hello();//prints Hello</pre>

<h5>Autoloading classes</h5>

<p>spl_autoload_register can load all the classes while creating instance of it.</p>

<pre>spl_autoload_register(function ($class_name) {
		print($class_name);
    include $class_name . '.php';
});

$a = new MyClass1(); //MyClass1.php
var_dump($a);

$b = new MyClass2();//MyClass2.php
var_dump($b);</pre>


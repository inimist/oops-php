<?php include('../includes/parts/css.php') ?>

<h3>Object Assignment & Initialization, methods and properties</h3>

<h5>Example #1 - Creating new objects</h5>

<p>Objects can be created in different ways. Mainly 1. Using new keyword with actual class name 2. Using new keyword with an object created earlier 3. Using a static method to return a new "static" object.</p>

<p>Notice in the given example that comparing two objects of same class would yeild false.
</p>
<pre>class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;

var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);</pre>

<h5>Example #2 - Assigning and Using Objets</h5>

<p>In the example below we can see that an assigned variable object is affected by a change to the original instance object. It is equally affected using reference the new reference object. </p>

<p>In case of setting original object to null does not affect the assigned object however. See example below.
</p>
<pre>$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);</pre>

<p>Will output:</p>

<pre class=result>NULL
NULL
object(SimpleClass)#1 (1) {
   ["var"]=>
     string(30) "$assigned will have this value"
}</pre>

<p>See <a href="/oops/object-assignment.php">working example</a></p>

<h5>Example #3 - Access member of newly created object (PHP 7.0+)</h5>

<pre>echo (new DateTime())->format('Y');</pre>

<h5>Note on methods and property names and its scope</h5>

<p><strong>Method and name conflict</strong></p>

<p>There can be a method and property with same name. </p>

<pre>class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar;
echo $obj->bar();</pre>

<p><strong>A property can be overwritten with anonymous function</strong></p>

<pre>class Foo
{
    public $bar;
    
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo();

// as of PHP 5.3.0:
$func = $obj->bar;
echo $func(), PHP_EOL;

// alternatively, as of PHP 7.0.0:
echo ($obj->bar)(), PHP_EOL;</pre>



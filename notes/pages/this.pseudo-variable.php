<?php include('../includes/parts/css.php') ?>

<h2>Use of $this pseudo-variable - in instance and in static context </h2>

<p>Using $this in foreign class would work in PHP 5.6 but referencing the current class and not the local class in which $this is used. See example below:</p>

<pre>
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();
</pre>

<p>The code above would output:</p>

<img src="../../assets/images/useofthis.jpg" width="957" height="545" border="0" alt="">


<a href="/oops/this.php" target="canvas">See working example</a>. 

<p><strong>Note:</strong></p>

<p>In PHP 7.0 and above however using <strong>$this</strong> won't work</p>

<p>Using <strong>$this</strong> in static context would show Strict standards warnings in PHP 5.6 and above. Also $this 
</p>

<h3>Using ::class</h3>

<p>Since PHP 5.5, the class keyword is also used for class name resolution. You can get a string containing the fully qualified name of the ClassName class by using ClassName::class. This is particularly useful with namespaced classes.</p>

<h5>Example without namespace</h5>

<pre>class A {
}
echo A::class;</pre>

<p>Prints <strong>A</strong></p>

<h5>Example without namespace</h5>
<pre>
namespace NS {
    class A {
    }
    echo A::class;
}</pre>

<p>Prints <strong>NS\A</strong></p>


<h3>self - using pseudo keyword to access static properties or constants</h3>

<pre>class A {

	const       STAT = 'S' ; // no dollar sign for constants (they are always static)
	static     $stat = 'Static' ;
	public     $publ = 'Public' ;

	public function showMe( ){
			print '<br> self::STAT: '  .  self::STAT ; //prints S
			print '<br> self::$stat: ' . self::$stat ; //prints S
			print '<br>$this->stat: '  . $this->stat ; //empty ; Notice: Accessing static property A::$stat as non static..
			print '<br>' ;
	}
}
$A = new A( ) ;
$A->showMe( ) ;</pre>

<h5>Class names are case-insensitive</h5>

<p>That is to say, Any casing can be used to refer to the class.
</p>

<pre>class bAr{}
$t = new Bar();
$u = new bar();
echo ($t instanceof $u) ? "true" : "false"; // "true"
echo ($t instanceof BAR) ? "true" : "false"; // "true"
echo is_a($u, 'baR') ? "true" : "false"; // "true"</pre>
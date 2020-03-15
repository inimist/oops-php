<?php
$x = new b();

class b extends a {}

class a {
	function hello()	{
		echo "Hello";
	}
}

$x->hello();
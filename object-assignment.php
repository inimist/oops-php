<?php

class SimpleClass{
	
};

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

//

var_dump($instance);
var_dump($reference);
var_dump($assigned);

$reference = null; // $instance and $reference become null

$assigned->var = '$assigned will have new value';

//$reference->var = '$assigned will have new value';

var_dump($instance);
var_dump($reference);
var_dump($assigned);
?>
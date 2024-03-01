<?php 

$name = “hector”;

function sayHello($name) 
{
	$name = ucfirst($name);
    echo “Bonjour” . $name ;
}

sayHello($name);
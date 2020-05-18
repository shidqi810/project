<?php

class Animal
{
	// properti OOP PHP
	public $legs = 2;
	public $cold_blooded = "false";
	public $name;
	
	// Construct OOP PHP
	function __construct($name)
	{
		echo $name;
	}
}

?>
<?php 
class Item{
	/**
	 * by default all the properties are set to null 
	 * if no value is passed
	 * constructer __construct() this is called when we create a new object
	 * We can do anything with constructer, but it is primarily used for 
	 * initializing properties, using arguments
	 */
	public $name; // properties are variables inside of class defination
	public $description; //properties are variables assosiated with objects individually
	public function __construct($name="",$description=""){
		echo "<br>";
		echo "This is called Everytime the object is created";
		echo "<br>";
		$this->name = $name;
		$this->description = $description;
	}

	public function sayHello(){
		echo "Hello <br>";
	}
	public function getName(){
		return $this->name;
	}
}

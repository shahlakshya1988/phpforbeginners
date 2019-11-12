<?php 
class Item{
	/**
	 * by default all the properties are set to null 
	 * if no value is passed
	 * constructer __construct() this is called when we create a new object
	 * We can do anything with constructer, but it is primarily used for 
	 * initializing properties, using arguments
	 * Properties and Methods by default are public, better mention public
	 * Private can only be accessed by its call methods only, direct access
	 * will give error
	 */
	public $name; // properties are variables inside of class defination
	public $description; //properties are variables assosiated with objects individually
	private $cost;
	public function __construct($name="",$description="",$cost=0){
		echo "<br>";
		echo "This is called Everytime the object is created";
		echo "<br>";
		$this->name = $name;
		$this->description = $description;
		$this->cost = $cost;
	}

	public function sayHello(){
		echo "Hello <br>";
	}
	public function getName(){
		return $this->name;
	}
	public function getCost(){
		return $this->cost;
	}
}

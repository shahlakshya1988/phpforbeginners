<?php 
class Item{
	/**
	 * by default all the properties are set to null 
	 * if no value is passed
	 */
	public $name; // properties are variables inside of class defination
	public $description; //properties are variables assosiated with objects individually

	public function sayHello(){
		echo "Hello <br>";
	}
	public function getName(){
		return $this->name;
	}
}

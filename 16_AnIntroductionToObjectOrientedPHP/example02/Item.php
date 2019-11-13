<?php 
/**
 * Class with public properties values can be set directly
 * PHP is very loose, we can assign value of any type
 * problem when one method expects data of certain type
 * getters,setter are used.
 * This works by making property Public, Private and setting value by
 * using public functions
 * one get{Propertyname} -> for getting value
 * one set{Propertyname} -> for setting the value
 * Instead of using properties directly we have to use it 
 * through getters and setters
 * Benifits :::
 * 1) We can control what is assigned
 * 2) We can additionaly process the property
 * 3) We can make property either readonly or write only
 */
class Item{
	private $name;
	private $description;
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		$this->description=$description;
	}

	/**
	 * Avoid this
	 * as this makes code difficult of 
	 * debug and understand
	 */

	public function __get($property){
		if(property_exists($this,$property)){
			return $this->$property;
		}
	}
	public function __set($property,$value){
		if(property_exists($this,$property)){
			$this->$property = $value;
		}
	}

}
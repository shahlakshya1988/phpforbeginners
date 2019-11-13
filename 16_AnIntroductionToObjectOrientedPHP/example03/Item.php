<?php 
/**
 * STATIC PROPERTY, METHOD
 * these can be accessed without creating the object of the class
 * they are associated with the class not the object
 * self::, or static:: inside of the class
 * {ClassName}:: outside of the class
 */
class Item{
	static public $count = 0;
	public $name;
	public $description;
	public function __construct($name,$description){
		$this->name = $name;
		$this->description = $description;
		//self::$count++;
		static::$count++;
	}
	public function getName(){
		return $this->name;
	}
	public static function getCount(){
		//return self::$count;
		return static::$count;
	}
}
<?php 
/**
 * constants can be used inside of the classes
 * we can't use define function inside of class
 * we have to use const keyword inside of the class
 * using access it same as static properties
 * They are tied to the specific instance of class
 * default they are public, but they can be of anything
 */
class Item{
	const MAX_LENGTH = 24;
	public function print(){
		echo self::MAX_LENGTH;
		echo "<br>";
	}
}
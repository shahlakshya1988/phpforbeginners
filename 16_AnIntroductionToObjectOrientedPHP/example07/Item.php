<?php
/*
PROTECTED WILL BE AVAILABLE ONLY TO THE CHILD CLASSES
NOT TO THE OUTSIDE CODE
*/
class Item{
    public $name;
    protected $code = "12345";
    public function getDetails(){
        return $this->name;
    }
}

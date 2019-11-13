<?php
class Book extends Item{
    public $author;
    public function getDetails(){
        $details = "";
        $details=parent::getDetails();
        $details.=", ".$this->author;
        return $details;
    }
    public function getCode(){
        return $this->code;
    }
}

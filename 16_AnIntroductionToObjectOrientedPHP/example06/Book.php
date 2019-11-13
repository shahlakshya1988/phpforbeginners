<?php
/**
* Method Overriding -> We have modified the method of the parent /**
* To Work differently in child /**
* for making parent method call we have to use parent::
* BE CAREFULL IN EDITING PARENT CLASS METHODS AS THEY WILL REFLECT IN CHILD
* CLASS ALSO
*/
 class ClassName extends AnotherClass
 {

     function __construct(argument)
     {
         // code...
     }
 }

 */
class ClassName extends AnotherClass
{

    function __construct(argument)
    {
        // code...
    }
}

**/
class Book extends Item{
    public $author;
    public function getDetails(){
        $details = "";
        $details=parent::getDetails();
        $details.=", ".$this->author;
        return $details;
    }
}

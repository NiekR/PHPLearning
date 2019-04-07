<?php


 class Users {
     public $first;
     public $last;
     public $haircolor;
     public $eyeColor;

     public function __construct($first, $last, $hairColor, $eyeColor)
     {
         $this->first = $first;
         $this->last = $last;
         $this->haircolor = $hairColor;
         $this->eyeColor = $eyeColor;

     }

     public function fullName() {
         return $this->first." ".$this->last;
     }

     public function __destruct()
     {
         // TODO: Implement __destruct() method.
     }
 }

 class NewClass {

     // Properties and
    public $data = "Property";
    public $error = "This is the class called".__CLASS__."!";
    public static $static = 0;



    public function __construct()
    {
        echo "This class has been instantiated";

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        echo "toString method: ";
        return $this->error;
    }

     public function setNewProperty($newdata){
        $this->data = $newdata;
    }

    public  function getProperty() {
        return $this->data;
    }

    public function  __destruct()
    {
        echo "This the end of the class";
    }

    // Static method
     public static function staticMethod(){
        return ++self::$static;

     }


 }


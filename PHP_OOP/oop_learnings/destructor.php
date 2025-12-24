<!-- 
 PHP - The __destruct() Function
A destructor is called when the object is destructed or the script 
is stopped or exited.

If you create a __destruct() function, PHP will automatically call 
this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

The example below has a __construct() function that is automatically 
called when you create an object from a class, 
and a __destruct() function that is automatically called at the end 
of the script:

-->

<?php

class fruits{
    public $color;
    public $name;

    public function __construct($name,$color){
        $this->name =$name;
        $this->color = $color;
    }
    public function __destruct(){
        echo"this is {$this->name}.";
    }
}

$apple = new fruits("apple","blue");

?>
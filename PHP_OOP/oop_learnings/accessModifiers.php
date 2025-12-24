<!-- 
 properties and methods can have access modifies which control
 where they can be accessed.

 there are three access modifiers
 public- the property or method can be accessed from anywhere. this is default

 protected- the property or method can be accessed within the class and by classes
 derived from that class.

 private - the property or method can only be accessed within the class

-->

<!-- examples -->

<?php
class newFruits{
    public $name;
    private $color;
    protected $taste;
}
$mango = new newFruits();
$mango->name = "mango"; // ok
// $mango->color = "RED";  //error
// $mango ->taste ='sweet'; // error

?>
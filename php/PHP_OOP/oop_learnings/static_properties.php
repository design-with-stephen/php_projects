<!-- 
 +++++++++++++++++ static properties+++++++++++++++++
A class can have both static and non-static properties. 
A static property can be accessed from a method in the 
same class using the self keyword and double colon (::):
-->

<?php
class pi{
    public static $value= 3.143;
    public function staticValue(){
        return self::$value;
    }
}
$pi =new pi();
echo $pi->staticValue();

?>

To call a static property from a child class, 
use the parent keyword inside the child class
 <?php
class pi2 {
  public static $value=3.14159;
}

class x extends pi2 {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?> 

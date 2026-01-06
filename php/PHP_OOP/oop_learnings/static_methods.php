<?php

// syntax
class Classname{
    public static function staticMethod(){
        echo "Hello world";
    }
}

// to access a static method use the class name, double colon(::),
// and the method name

// syntax
// classname::staticMethod();

// example
class greetings{
    public static function welcome(){
        echo "hello world";
    }

}
greetings::welcome();


// example two
// using the self keyword to access the static method inside 
// the same class

class Greetings2{
    public static function hi(){
        echo "bye";
    }

    public function __construct(){
        self::hi();
    }
}
new Greetings2();

?>

<!--
Static methods can also be called from methods in 
other classes. 
To do this, the static method should be public: 

-->

 <?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?> 

<!-- 
To call a static method from a child class, 
use the parent keyword inside the child class. 
Here, the static method can be public or protected.
-->

 <?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?> 
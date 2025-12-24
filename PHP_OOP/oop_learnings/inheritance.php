<!-- 
 PHP - What is Inheritance?
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.


-->

<?php
// class fruits

class fruit{
    public $name;
    public $color;


    public function __constructor($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo"the fruit is {$this->name} and the color is {$this->color}";
    }
}

// strawberry is inherited from fruit

class strawberry extends fruit{
    public function message(){
        echo "iam a fruit or a berry?";
    }
}

$strawberry =new strawberry("strawberry","yellow");
$strawberry->message();
$strawberry->intro();




?>
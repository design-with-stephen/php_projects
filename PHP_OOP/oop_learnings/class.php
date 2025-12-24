<!-- classes and objects -->

<?php
// defining class syntax
// class fruits{

// }
// declaring a class fruit

class fruits{
    // properties
    public $color;
    public $name;

    //methods
    function set_name($name){
        $this->name =$name;
    }
    function set_color($color){
        $this->color=$color;
    }
}

//  classes are nothing without objects
//  we can create multiple objects from a class
//  each object has the all the properties and methods defined but they will have different property values
 class fruit{
    // properties
    public $color;
    public $name;

    //methods
    function set_name($name){

        // the this keyword refers to the current object and is only available inside the methods
        $this->name =$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
}

$apple =new fruit();
$apple->set_name("maize");

echo $apple->get_name();

// there are two ways to change the values of the properties
// (1) inside the class(by adding a set method eg set_name() and using $this)

class car {
    public $color;
    public $name;
    function set_name($name){
        $this->name =$name;
    }
}
$bmw =new car();
$bmw->set_name("BMW");
echo $bmw->name;


//(2) Outside the class (by directly changing the property value)
class cars {
    public $color;
    public $name;
}
$bmw =new car();
$bmw->name = "BMW";
echo $bmw->name;
?>
<!-- 
 ==================php abstract classes==============
 Abstract classes and methods are when the parent class has a named method, 
 but need its child classes to fill out the tasks.

 an abstract class is a class that contains at least one abstract method.
 an abstract method is a method that is declared but not implemented in the code

 an abstract class or method is defined with the "abstract" key word.

 when inheriting from an abstract class the child method must be defined with the
 same name and the same or less restricted access modifier e.g if the access modifier
 of the abstract method is defined as protected, the child class must be defined as --
 protected or public


-->

<?php 
// syntax
abstract class ParentClass{

    abstract public function method1();
    abstract public function method2($name,$color);
    abstract public function method3():string;
    abstract public function method4();
}


?>



<?php 
// syntax
abstract class car{
    public $name;
    public function __construct($name){
        $this->name =$name;
    }

    abstract public function intro():string;

}

// child classes

class bmw extends car{
    public function intro():string{
        return " chose $this->name";
    }
}

// creating objects from the child class, 
$bmw = new bmw("bmw");
echo $bmw->intro();

// example 2
abstract class parentClass2{
    // abstract method with arguments
    abstract public function prefixName($name);

}

class childClass2 extends parentClass2{
    public function prefixName($name){
        if($name == "stephen"){
            $prefix ="Mr.";
        } else if($name == "stephenie"){
            $prefix = "Mrs.";
        }else{
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new childClass2();
echo $class->prefixName("stephen");
echo "<br>";
echo $class->prefixName("stephenie");



// example three

abstract class parentClass3{
    abstract protected function prefixName($name);
}

class childClass3 extends parentClass3{
    // the child class may define optional arguments 
    // that are npt in the parent's abstract method

    public function prefixName($name,$separator=".",$greet="dear"){
        if($name =="stephen"){
            $prefix = "Mr";
        } else if($name == "Stephenie"){
            $prefix = "Mrs";
        }else{
            $prefix = "";
        }
        return "{$greet}{$prefix}{$separator}{$name}";
    }
}

$class = new childClass3();
echo $class->prefixName("stephen");
?>
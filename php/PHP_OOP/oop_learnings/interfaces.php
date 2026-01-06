<!-- 
 ++++++++++++++++ PHP INTERFACES+++++++++++++++++

 #allow one to specify what methods a class must implement
 # interfaces make it easy to use a variety of different classes
 in the same way. when one or more classes use the same interface, it is referred
 to as "polymorphism"

 # interfaces are declared using the "interface" keyword

 #interfaces are similar to abstract classes. the difference btw them are
 - interfaces cannot have properties while abstract can 
 - all interface methods must be public while abstract 
 class methods is public or protected
 -All methods in an interface are abstract, so they cannot be 
 implemented in code and the 
 abstract keyword is not necessary
 -classes can implement an interface while inheriting from another 
 class at the same time
-->

<!-- +++++ syntax ++++ -->
<?php
interface interfaceName{
    public function someMethod1();
    public function someMethod2($name,$color);
    public function someMethod3():string;
}

// example1

// interface definition
interface Animal{
    public function makeSound();
}

// class cat definition
class cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}
$animal = new cat();
$animal->makeSound();


// example 2
interface Animals{
    public function makeSound();

}

class dog implements Animals{
    public function makeSound(){
        echo "bark";
    }
}
class mouse implements Animals{
    public function makeSound(){
        echo "squeak";
    }
}

// creating a list of animals
$dog = new dog();
$mouse = new mouse();
$animals =[$dog,$mouse];
//looping through the animal list telling the animals to make sound
foreach($animals as $animal){
    echo $animal->makeSound();
}
?>
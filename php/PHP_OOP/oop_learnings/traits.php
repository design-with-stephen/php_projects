<!-- **************PHP traits*****************
 Php only supports single inheritance: a chile class can 
 inherit from one single parent
 
 so what if a class needs to inherit from multiple behaviors?
OOP traits solve this problem.

traits are used to declare methods that can be used in multiple classes
traits can have methods and abstract methods that can be used in multiple classes,
the methods can have any access modifier(public, private, or private)

traits are declared using the trait keyword

##########################################################
syntax
########################################################

trait traitName{
// some code
}

to use the trait keyword in a class, use the "use" keyword
#####################################################
syntax
#########################################################

class myClass{
  use traitName
}

-->

<!-- example -->

<?php
  trait message{
    public function message(){
        echo"OOP is fun!";
    }
  }

  class welcome1{
    use message;
  }

  $obj = new welcome1();
  $obj->message();


// example 2 using multiple traits

trait message2{
    public function message2(){
        echo "OOP reduces code duplication";
    }
}
trait message3{
    public function message3(){
        echo "OOP is enjoyable";
    }
}

class welcome2{
    use message2,message3;
}

$obj2 = new welcome2();
$obj2->message2();
$obj2->message3();
?>




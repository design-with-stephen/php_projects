<!-- 
 ===============php class constants=============

 class constant can be useful if you need to define 
 some constant data within a class

 a class constant is declared inside a class with the const key word
 *a constant cannot be changed once it is declared
  * class const are case sensitive, However its recommended to name
 the constants all in upper case

 *to access a constant from outside the class, 
 the scope resolution operator(::) is used. the class name is followed by the
 operator then the const.

 * to access the constant inside the class the "self" key word is used.
 the self wort is declared follow by the scope resolution operator(::)
 then followed by the constant name


-->


<?php 

// example one, accessing from outside of the class
class Goodbye{
    const LEAVING_MESSAGE ="thank you for visiting us";
}

echo Goodbye::LEAVING_MESSAGE;

?>


<?php 


// example 2, accessing from inside the class
class Goodbye2{
    const LEAVING_MESSAGE ="thank you for visiting us";

    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
}
$goodbye = new Goodbye2();
$goodbye->byebye();


?>
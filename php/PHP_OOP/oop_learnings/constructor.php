<!-- 
 A constructor function (__construct()) allows initiation of an object's properties upon creation of the object


-->
<?php
 class cars{
    public $name;
    public $color;

    public function __construct($name)
    {
        $this->name =$name;
    }
    public function get_name(){
        return $this->name;
    }
 }

 $toyata = new cars("toyota");
 echo $toyata->get_name();


?>
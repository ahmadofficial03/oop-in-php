<?php  
abstract class Animal  {  
    public $name;  
    public $age;  
    public function Describe()  {  
        return $this->name . ", " . $this->age . " years old";      
    }  
    
    abstract public function Greet();  
}

class cat extends Animal  {  
    public function Greet()  {  
        return "Lion!";      
    }  
    
    public function Describe()  {  
        return parent::Describe() . ", and I'm a cat!";      
    }  
}


$cat = new cat();  
$cat->name = "Seru";  
$cat->age = 5;  
echo $cat->Describe();  
echo $cat->Greet();  
  
?>  
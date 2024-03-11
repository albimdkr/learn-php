<?php
class Student {
    protected $name = "Alex";
}

// Create Inheritance Class
class Leader extends Student {
    public function getNameStudent(){
        return $this->name; // Potential Error
    }
}

// Use Inheritance Class
$leader = new Leader();
echo $leader->name; //Uncaught Error: Cannot access protected property Leader::$name

?>
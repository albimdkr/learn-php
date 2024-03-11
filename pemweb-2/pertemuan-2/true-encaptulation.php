<?php
class Student {
    protected $name = "Alex";
}

// Create Inheritance Class
class Leader extends Student {
    public function getNameStudent(){
        return $this->name; //call properti protected
    }
}

// Use Inheritance Class
$leader = new Leader();
echo $leader->getNameStudent(); // call method
?>
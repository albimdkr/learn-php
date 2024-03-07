<?php
// Class
Class Employee {

    // encapsulation
    private $name;
    private $position;
    private $salary;

    // Constructor
    public function __construct($name, $position, $salary){
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    // Method GetInfo
    public function getInfo(){
        return "Name: ". $this->name . "Position: ". $this->position . "Salary: " . $this->salary; 
    }

    // Method getPosition
    public function getPosition() {
        return $this->position;
    }

    // Method getSalary
    public function getSalary() {
        return $this->salary;
    }

}
?>
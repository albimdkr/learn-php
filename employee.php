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

// Manager Extend Employee
class Manager extends Employee {
    private $department;

    public function __construct($name , $position, $salary, $department) {
        parent::__construct($name, $position, $salary);
        $this->department = $department;
    }

    public function getDepartment(){
        return $this->department;
    }
}

// Staff
Class Staff extends Employee {

}

// Crete Object Employee 
$manager = new Manager("John Max", "Manager", 500000, "Human Resource");
$staff = new Staff ("Alex", "Staff", 300000);
?>
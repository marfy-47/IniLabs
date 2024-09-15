<?php
class Employee {
    private $name;    
    private $position; 
    private $salary;   
    
    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }
    
    // Refactored setSalary without else
    public function setSalary($salary) {
        if ($salary < 0) {
            echo "Salary cannot be negative.";
            return;
        }
        $this->salary = $salary;
    }
    
    public function getSalary() {
        if ($this->salary === null) {
            return "Salary not set.";
        }
        return $this->salary;
    }
    
    public function getEmployeeDetails() {
        return "Name: " . $this->name . ", Position: " . $this->position . ", Salary: " . $this->getSalary();
    }
}

// Example usage
$employee = new Employee("Adib Ahmed", "Software Engineer");
$employee->setSalary(50,000);
echo $employee->getEmployeeDetails();
?>

<?php
require_once("EmployeeClass.php");
// use PersonClass;

class ManagerialEmployee extends Employee{

    public $managerailCertificate;
    
    public function calculateSalary(){
        return $this->experience * 400;
    }
}

?>
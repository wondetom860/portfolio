<?php
// use ManagerialEmployee\Models\Employee;
require_once("ManagerialEmployee.php");
require_once("TechnicalEmployee.php");

$john = new ManagerialEmployee();
$john->managerailCertificate = "PMI Certified";
$john->f_name = "John";
$john->l_name = "Doe";
$john->date_of_join = new DateTime("-10 year");
$john->id = '0907877';
$john->company_name = 'ETDU';
$john->role = 'Dean of Academic staff';
$john->experience = $john->getDuration();//calculates service year from date_of_join up now.
echo $john->describePerson();

echo "Salary: ".$john->calculateSalary();

$john = new TechnicalEmployee();
$john->technology = "Yii2";
$john->f_name = "WONDIMU";
$john->l_name = "TOMA";
$john->date_of_join = new DateTime("-10 year");
$john->id = '00702505';
$john->company_name = 'ETDU';
$john->role = 'Fullstack Developer';
$john->experience = $john->getDuration();//calculates service year from date_of_join up now.
echo $john->describePerson();

echo "Salary: ".$john->calculateSalary();



// class Person
// {
//     public $id;
//     public $f_name;
//     public $l_name;
//     public $company_name;
//     public $role;
//     public $date_of_join;

//     public $experience;
//     public function __construct()
//     {
//         echo "<br>Instantiating....<br>";
//         $this->date_of_join = new DateTime("now");
//     }

//     public function getFullName()
//     {
//         echo "<br>Getting Full Name....<br>";
//         return "{$this->f_name} {$this->l_name}";
//     }
//     public function describePerson()
//     {
//         echo "<br>Describe function called....<br>";
//         $dd = $this->date_of_join->format("d/m/Y");
//         $du = $this->getDuration();
//         return "{$this->getFullName()} works at {$this->company_name} as {$this->role}, Since {$dd} for {$du} months. <br><br>";
//     }

//     public function getDuration()
//     {
//         $diff = date_diff($this->date_of_join, new DateTime("now"));
//         return $diff->y;
//     }

//     public function calculateSalary()
//     {
//         return $this->experience * 200;
//     }
// }

// $model = new Person();
// $model->id = "00702505";
// $model->f_name = "WONDE";
// $model->l_name = "TOM";
// $model->company_name = "ETDU";
// $model->role = "Programmer";

// echo "<pre>";
// print_r($model);
// echo "</pre>";

// echo $model->describePerson();
// echo "<hr>";
// $model2 = new Person();
// $model2->id = "00702305";
// $model2->f_name = "Magez";
// $model2->l_name = "Chole";
// $model2->company_name = "Foundation";
// $model2->role = "Programmer";
// $model2->date_of_join = new DateTime("-2 year");
// echo "<pre>";
// print_r($model2);
// echo "</pre>";

// echo $model2->describePerson();

// echo "<hr><pre>";
// var_dump(date_diff(new DateTime("-2 month"), new DateTime("now")));
// echo "</pre>";

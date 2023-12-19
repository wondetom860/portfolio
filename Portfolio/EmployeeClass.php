<?php

class Employee
{
    public $id;
    public $f_name;
    public $l_name;
    public $company_name;
    public $role;
    public $date_of_join;

    public $experience;
    public function __construct()
    {
        echo "<br>Instantiating....<br>";
        $this->date_of_join = new DateTime("now");
    }

    public function getFullName()
    {
        echo "<br>Getting Full Name....<br>";
        return "{$this->f_name} {$this->l_name}";
    }
    public function describePerson()
    {
        echo "<br>Describe function called....<br>";
        $dd = $this->date_of_join->format("d/m/Y");
        $du = $this->getDuration();
        return "{$this->getFullName()} works at {$this->company_name} as {$this->role}, Since {$dd} for {$du} years. <br><br>";
    }

    public function getDuration()
    {
        $diff = date_diff($this->date_of_join, new DateTime("now"));
        return $diff->y;
    }

    public function calculateSalary()
    {
        return $this->experience * 200;
    }
}
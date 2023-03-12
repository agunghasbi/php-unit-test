<?php

namespace App\Models;

class Employee
{
    protected $employee;
    protected $age;
    // Function to set Employee name
    public function setName($name)
    {
        $this->employee = $name;
    }

    public function getName()
    {
        return $this->employee;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setNameAndAge($name, $age)
    {
        $this->employee = $name;
        $this->age = $age;
    }

    public function getNameAndAge()
    {
        return [$this->employee, $this->age];
    }
}

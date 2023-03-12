<?php

use App\Models\Employee;
use PHPUnit\Framework\TestCase;

class Employeetest extends TestCase
{
    protected $employee;

    public function setUp(): void
    {
        $this->employee = new Employee;
    }

    public function testGetEmployeeName(): void
    {
        $this->employee->setName('Roger');
        $this->assertEquals($this->employee->getName(), 'Roger');
    }

    public function testGetEmployeeAge(): void
    {
        $this->employee->setAge(23);

        $this->assertEquals($this->employee->getAge(), 23);
    }

    public function testGetEmployeeNameAndAge(): void
    {
        $this->employee->setNameAndAge('Roger', 23);

        $this->assertEquals($this->employee->getNameAndAge(), ['Roger', 23]);

        $this->assertArrayHasKey(1, $this->employee->getNameAndAge());
    }
}

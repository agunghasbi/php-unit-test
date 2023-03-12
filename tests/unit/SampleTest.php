<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testTrueReturnsTrue()
    {
        $output = false;
        if (1 === 1) {
            $output = true;
        }
        $this->assertTrue($output);
    }

    public function testCheckIfHasKey(): void
    {
        $userArray = [
            'name' => 'Roger',
            'age' => 23,
        ];

        $this->assertArrayHasKey('age', $userArray);
    }
}

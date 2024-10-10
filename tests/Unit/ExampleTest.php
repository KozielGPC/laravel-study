<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**
     * A test to verify that a number equals a specific value.
     */
    public function test_that_number_is_equal(): void
    {
        $this->assertEquals(5, 5);
    }

    /**
     * A test to verify that an array contains a specific value.
     */
    public function test_that_array_contains_value(): void
    {
        $this->assertContains('php', ['php', 'javascript', 'java']);
    }

    /**
     * A test to verify that a variable is null.
     */
    public function test_that_variable_is_null(): void
    {
        $value = null;
        $this->assertNull($value);
    }
}

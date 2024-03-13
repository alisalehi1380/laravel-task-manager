<?php

namespace AliSalehi\Task\Tests;

use AliSalehi\Task\TaskServiceProvider;
use AliSalehi\Task\Tests\Traits\TaskTest;
use Orchestra\Testbench\TestCase;

class BaseTest extends TestCase
{
    use TaskTest;
    
    protected function getPackageProviders($app): array
    {
        return [
            TaskServiceProvider::class,
        ];
    }
    
    /**
     * Is a fake test.
     */
    public function test_success(): void
    {
        $this->assertEquals(1, 1);
    }
}

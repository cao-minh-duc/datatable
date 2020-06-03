<?php

namespace UiBuilder\Datatable\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Datatable\DatatableServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DatatableServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

<?php

namespace DependencyInjection\Tests;

use DatabaseConfiguration;
use DatabaseConnection;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class DependencyInjectionTest
 * @package DependencyInjection\Tests
 */
class DependencyInjectionTest
{
    /**
     * Test DependDependency Injection.
     */
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);
        print_r($connection->getDsn());
    }
}

// Run test
(new DependencyInjectionTest())->testDependencyInjection();
<?php

namespace DependencyInjection\Tests;

use DependencyInjection\DatabaseConfiguration;
use DependencyInjection\DatabaseConnection;

require __DIR__ . '/../DatabaseConfiguration.php';
require __DIR__ . '/../DatabaseConnection.php';

class DependencyInjectionTest
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);
        print_r($connection->getDsn());
    }
}

(new DependencyInjectionTest())->testDependencyInjection();
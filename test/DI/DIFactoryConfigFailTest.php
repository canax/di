<?php

namespace Anax\DI;

use \PHPUnit\Framework\TestCase;

/**
 * Negative tests for configurable DI container..
 */
class DIFactoryConfigFailTest extends TestCase
{
    /**
     * Load services with invalid reference, empty array.
     *
     * @expectedException Exception
     */
    public function testLoadServicesWithInvalidReferenceEmptyArray()
    {
        $di = new DIFactoryConfig();
        $di->loadServices([]);
    }



    /**
     * Load services with invalid reference, invalid path.
     *
     * @expectedException Exception
     */
    public function testLoadServicesWithInvalidReferenceInvalidPath()
    {
        $di = new DIFactoryConfig();
        $di->loadServices("invalid/path");
    }
}

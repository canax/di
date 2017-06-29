<?php

namespace Anax\DI;

/**
 * Testing the Dependency Injector service container.
 */
class DITest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     *
     * @expectedException \Exception
     */
    public function testLoadFailesInServiceCreation()
    {
        $di = new DI();
        $service = 'failsWithException';

        $di->set($service, function () {
            throw new Exception("Failed creating service.");
        });

        $di->get($service);
    }



    /**
     * Test
     */
    public function testOverwritePreviousDefinedService()
    {
        $di = new DIFactoryDefault();
        $service = 'session';

        $di->set($service, function () {
            $session = new \stdClass();
            return $session;
        });

        $session = $di->get($service);
        $this->assertInstanceOf('\stdClass', $session);
    }
}

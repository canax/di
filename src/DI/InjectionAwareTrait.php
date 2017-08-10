<?php

namespace Anax\DI;

/**
 * Trait to use for DI aware services to let them know of the current $di.
 *
 */
trait InjectionAwareTrait
{
    /**
     * @var $di the DI/service container.
     */
    protected $di;



    /**
     * Set the service container to use
     *
     * @param class $di a service container
     *
     * @return $this
     */
    public function setDI($di)
    {
        $this->di = $di;
    }
}

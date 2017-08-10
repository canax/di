<?php

namespace Anax\DI;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;

/**
 * DI factory class creating a set of default services by loading
 * * them from a configuration file.
 */
class DIFactoryConfig extends DI implements ConfigureInterface
{
    use ConfigureTrait;



   /**
     * Constructor creating a set of services included into this DI container.
     */
    public function __construct($configFile)
    {
        $this->configure($configFile);
        foreach ($this->config["services"] as $name => $service) {
            if (isset($service["shared"]) && $service["shared"]) {
                $this->setShared($name, $service["callback"]);
            } else {
                $this->set($name, $service["callback"]);
            }
        }
    }
}

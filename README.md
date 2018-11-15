Anax DI
==================================

[![Join the chat at https://gitter.im/canax/di](https://badges.gitter.im/canax/di.svg)](https://gitter.im/canax/di?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Latest Stable Version](https://poser.pugx.org/anax/di/v/stable)](https://packagist.org/packages/anax/di)

[![Build Status](https://travis-ci.org/canax/di.svg?branch=master)](https://travis-ci.org/canax/di)
[![CircleCI](https://circleci.com/gh/canax/di.svg?style=svg)](https://circleci.com/gh/canax/di)

[![Build Status](https://scrutinizer-ci.com/g/canax/di/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/di/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/canax/di/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/canax/di/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/canax/di/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/canax/di/?branch=master)

[![Maintainability](https://api.codeclimate.com/v1/badges/ff984b03c7e0421f5faa/maintainability)](https://codeclimate.com/github/canax/di/maintainability)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c4802edf7cf5495e9be8dfbd5c116cb1)](https://www.codacy.com/app/mosbth/di?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=canax/di&amp;utm_campaign=Badge_Grade)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/850a0607-ad17-4dcc-924c-ad0bb6ae8d63/mini.png)](https://insight.sensiolabs.com/projects/850a0607-ad17-4dcc-924c-ad0bb6ae8d63)

Anax DI service container for dependency injection of framework services using creation and lazy loading of services.

The implementation of the container is compliant with [PHP-FIG 
PSR-11: Container interface](https://www.php-fig.org/psr/psr-11/)



Install
------------------

You can install the module from [`anax/di` on Packagist](https://packagist.org/packages/anax/di) using composer.

```text
composer require anax/di
```



Development
------------------

To work as a developer you clone the repo and install the local environment through make. Then you can run the unit tests.

```text
make install
make test
```



Usage
------------------

This is a basic usage of the DI container.

```php
// Create it
$di = new \Anax\DI\DI();

// Add a service to interface
$di->load();

```



###Add a service using a callback
###Add a service using an object
###Add a service using a class name




Dependency
------------------

Using psr11.



License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
 .  
..:  Copyright (c) 2013 - 2018 Mikael Roos, mos@dbwebb.se
```

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.middleware.symfony_log' shared service.

include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Middleware/SymfonyLogMiddleware.php';
include_once $this->targetDirs[3].'/vendor/guzzlehttp/guzzle/src/MessageFormatter.php';

return $this->services['eight_points_guzzle.middleware.symfony_log'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\SymfonyLogMiddleware(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['eight_points_guzzle.symfony_log_formatter'] ?? ($this->services['eight_points_guzzle.symfony_log_formatter'] = new \GuzzleHttp\MessageFormatter('{method} {uri} {code}'))));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.formatter' shared service.

include_once $this->targetDirs[3].'/vendor/guzzlehttp/guzzle/src/MessageFormatter.php';

return $this->services['eight_points_guzzle.formatter'] = new \GuzzleHttp\MessageFormatter();

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.logger' shared service.

include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Log/LoggerInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerTrait.php';
include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Log/Logger.php';

return $this->services['eight_points_guzzle.logger'] = new \EightPoints\Bundle\GuzzleBundle\Log\Logger();
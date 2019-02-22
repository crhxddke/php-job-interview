<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\SearchController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
include_once $this->targetDirs[3].'/src/Controller/SearchController.php';
include_once $this->targetDirs[3].'/src/Service/VisitService.php';
include_once $this->targetDirs[3].'/src/Service/QuoteService.php';

return $this->services['App\Controller\SearchController'] = new \App\Controller\SearchController(new \App\Service\VisitService(($this->services['eight_points_guzzle.client.visit_client'] ?? $this->load('getEightPointsGuzzle_Client_VisitClientService.php'))), new \App\Service\QuoteService(($this->services['eight_points_guzzle.client.quote_client'] ?? $this->load('getEightPointsGuzzle_Client_QuoteClientService.php'))));

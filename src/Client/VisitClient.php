<?php
declare(strict_types=1);

namespace App\Client;

use GuzzleHttp\Client;

final class VisitClient extends Client
{
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}
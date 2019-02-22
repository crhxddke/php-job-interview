<?php

declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use http\Env\Response;
use Psr\Http\Message\ResponseInterface;

class VisitService
{
    private $visitClient;

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(Client $visitClient)
    {
        $this->visitClient = $visitClient;
    }

    /**
     * @param array $data
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data): VisitService
    {
        $this->response = $this->visitClient
            ->request('POST', '', [
                RequestOptions::JSON => $data
            ]);
        return $this;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function getVisitId(): string
    {
        return json_decode($this->getResponse()->getBody()->getContents(), true)['sid'];
    }
}
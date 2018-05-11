<?php

namespace Tests;

use GuzzleHttp\Client;
use Radweb\Postmark\Transport;

class PostmarkTransportStub extends Transport
{
    /**
     * @var Client
     */
    protected $client;

    protected function getHttpClient(): Client
    {
        return $this->client;
    }

    public function setHttpClient(Client $client)
    {
        $this->client = $client;
    }
}

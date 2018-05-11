<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Radweb\Postmark\Transport;

class PostmarkTransportStub extends Transport
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(array $responses = [])
    {
        parent::__construct('TESTING_SERVER');

        $this->client = $this->mockGuzzle($responses);
    }

    protected function getHttpClient()
    {
        return $this->client;
    }

    public function getHistory()
    {
        return $this->client->transactionHistory;
    }

    private function mockGuzzle(array $responses)
    {
        $stack = HandlerStack::create(new MockHandler($responses));
        $client = new Client(['handler' => $stack]);
        $client->transactionHistory = [];
        $stack->push(Middleware::history($client->transactionHistory));

        return $client;
    }
}

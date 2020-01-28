<?php

namespace facebookAPI;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Request {

    /**
     * @var $authorization string
     */
    protected $authorization;

    /**
     * @var $userAgent string
     */
    protected $userAgent;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Request constructor.
     * @param string $authorization
     * @param string $userAgent
     */
    public function __construct($authorization, $userAgent) {
        $this->authorization = $authorization;
        $this->userAgent = $userAgent;
        $this->client = new Client(['verify' => false ]);
    }


    /**
     * @param $method string
     * @param $uri  string
     * @param $body  string
     *
     * @return ResponseInterface
     *
     * @throws Exception
     */
    public function req($method, $uri, $body) {

        try {
            $res = $this->client->request($method,
                $uri, [
                    'proxy' => 'localhost:8080',
                    'headers' => [
                        "Content-Encoding"=>"gzip",
                        'Authorization' => $this->authorization,
                        'User-Agent' => $this->userAgent,
                        'Accept-Encoding' => 'gzip, deflate',
                        'Content-Type' => 'application/x-www-form-urlencoded',
                        'Connection' => 'close'
                    ],
                    "body" => $body
                ]);
            return $res;
        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}

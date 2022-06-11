<?php

namespace Harmons\lib\integrations;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Harmons\abstracts\AbstractHandlerApi;

class HandlerApi extends AbstractHandlerApi
{
    /**
     * @var string
     */
    public string $apiUrl;

    /**
     * @return mixed|void
     */
    public function init()
    {

    }

    /**
     * @param string $apiUrl
     * @return mixed|void
     */
    public function setUrl(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    /**
     * @param array $queryParams
     * @return false|string
     * @throws GuzzleException
     */
    public function getAvatar(array $queryParams = [])
    {
        $client = new Client();
        $request = $client->request("GET", $this->apiUrl, $queryParams);
        if ($request->getStatusCode() == 200) {
            return $request->getBody()->getContents();
        }

        return false;
    }
}
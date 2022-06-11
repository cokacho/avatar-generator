<?php

namespace Harmons\lib\integrations;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Harmons\abstracts\AbstractHandlerApi;

class HandlerUrl extends AbstractHandlerApi
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
        return $this->apiUrl . "?" . http_build_query($queryParams);
    }
}
<?php

namespace Harmons\interfaces;

interface HandlerApiInterface
{
    /**
     * @return mixed
     */
    public function init();

    /**
     * @param string $apiUrl
     * @return mixed
     */
    public function setUrl(string $apiUrl);
}
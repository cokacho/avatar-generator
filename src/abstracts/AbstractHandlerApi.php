<?php

namespace Harmons\abstracts;

use Harmons\interfaces\HandlerApiInterface;
use function Env\env;

abstract class AbstractHandlerApi implements HandlerApiInterface
{
    /**
     * Default Url
     */
    public function __construct()
    {
        $this->apiUrl = env("DEFAULT_URL", null);
    }

}
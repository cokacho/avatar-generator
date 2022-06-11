<?php

namespace Harmons\lib\Integrations;

use Harmons\abstracts\AbstractAvatarApi;
use function Env\env;

class AvatarImageWebApi extends AbstractAvatarApi
{
    public string $apiUrl;
    public function init()
    {
        $this->apiUrl = env("DEFAULT_URL", null);
    }

    public function setUrl(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }
}
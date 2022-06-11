<?php

namespace Harmons\lib;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Harmons\lib\integrations\Avatar;
use ReflectionClass;
use function Env\env;

class AvatarUIAvatars extends Avatar
{
    /**
     * @return void
     * @throws Exception
     */
    public function load()
    {
        if (empty($this->settings)) {
            throw new Exception("The settings shouldn't be empty");
        }
        $url = env(strtoupper((new ReflectionClass($this))->getShortName() . "_URL"), null);
        if (empty($this->settings["name"])) {
            throw new Exception("The settings name shouldn't be empty");
        }
        $this->handler->setUrl($url);
    }

    /**
     * @return false|mixed|string|void
     * @throws GuzzleException
     */
    public function getAvatarContent()
    {
        return $this->handler->getAvatar($this->settings);
    }
}
<?php

namespace Harmons\lib;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Harmons\lib\integrations\Avatar;
use ReflectionClass;
use function Env\env;

class AvatarDiceBear extends Avatar
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
        if (empty($this->settings["gender"]) || empty($this->settings["name"])) {
            throw new Exception("The settings gender and name shouldn't be empty");
        }
        $url .= $this->settings["gender"] . "/";
        $url .= $this->settings["name"] . ".svg";
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
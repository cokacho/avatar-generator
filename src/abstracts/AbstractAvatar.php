<?php

namespace Harmons\abstracts;

use Harmons\interfaces\AvatarInterface;
use Harmons\interfaces\HandlerApiInterface;

abstract class AbstractAvatar implements AvatarInterface
{
    /**
     * @var HandlerApiInterface
     */
    public HandlerApiInterface $handler;

    /**
     * @var array
     */
    public array $configuration;

    /**
     * @param HandlerApiInterface $handler
     * @return void
     */
    public function setHandler(HandlerApiInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @return mixed|void
     */
    public function init()
    {

    }

    /**
     * @return mixed|void
     */
    public function getAvatarContent()
    {
        // TODO: Implement getAvatarContent() method.
    }
}
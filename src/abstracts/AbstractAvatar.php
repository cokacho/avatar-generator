<?php

namespace Harmons\abstracts;

use Harmons\interfaces\AvatarApiInterface;
use Harmons\interfaces\AvatarConfigurationInterface;
use Harmons\interfaces\AvatarInterface;

abstract class AbstractAvatar implements AvatarInterface
{
    public AvatarApiInterface $handler;

    public AvatarConfigurationInterface $configuration;

    abstract public function init();

    public function load(AvatarApiInterface $handler, AvatarConfigurationInterface $configuration)
    {
        $this->setHandler($handler);
        $this->setConfiguration($configuration);

    }

    public function setHandler(AvatarApiInterface $handler)
    {
        $this->handler = $handler;
    }

    public function getHandler(): AvatarApiInterface
    {
        return $this->handler;
    }

    public function setConfiguration(AvatarConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration(): AvatarConfigurationInterface
    {
        return $this->configuration;
    }


    public function getAvatarContent()
    {
        // TODO: Implement getAvatarContent() method.
    }
}
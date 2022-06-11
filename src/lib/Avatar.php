<?php

namespace Harmons\lib\Avatar;

use Harmons\interfaces\AvatarApiInterface;
use Harmons\interfaces\AvatarConfigurationInterface;
use Harmons\interfaces\AvatarInterface;
use Harmons\lib\Integrations\AvatarImageWeb;

class Avatar
{

    public AvatarInterface $wrapper;

    public function init()
    {

    }

    public function load($type, $configuration)
    {
        if ($type === "dice_bear")
        {
            $this->wrapper = new AvatarImageWeb();
            $this->diceBear();
        }

        /**
         * TODO: Add more types
         */

        $this->wrapper->init();
    }

    private function diceBear()
    {
        $this->wrapper->load($handler, $configuration);
    }

    private function
}
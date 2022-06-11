<?php

namespace Harmons\lib\integrations;

use Harmons\abstracts\AbstractAvatar;

class Avatar extends AbstractAvatar
{
    /**
     * @var array
     */
    public array $settings;

    /**
     * @param array $settings
     * @return void
     */
    public function setSettings(array $settings)
    {
        $this->settings = $settings;
    }

}
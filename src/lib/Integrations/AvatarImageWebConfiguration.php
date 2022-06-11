<?php

namespace Harmons\lib\Integrations;

use Harmons\abstracts\AbstractAvatarConfiguration;

class AvatarImageWebConfiguration extends AbstractAvatarConfiguration
{
    public string $gender;
    public string $wordColor;
    public string $backgroundColor;

    public function applyPath() {

    }

    public function applyParams(string $apiUrl)
    {

    }

    public function getConfiguration()
    {
        // TODO: Implement getConfiguration() method.
    }
}
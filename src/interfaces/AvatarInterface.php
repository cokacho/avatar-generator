<?php

namespace Harmons\interfaces;

interface AvatarInterface
{
    /**
     * @return mixed
     */
    public function init();

    /**
     * @return mixed
     */
    public function getAvatarContent();

}
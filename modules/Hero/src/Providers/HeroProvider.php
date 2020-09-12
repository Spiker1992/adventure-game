<?php

namespace AdventureGame\Hero\Providers;

use AdventureGame\Common\Providers\BaseProvider;

class HeroProvider extends BaseProvider
{
    public function __construct($app)
    {
        parent::__construct($app);

        $this->moduleSourceDirectory = dirname(__DIR__);
    }
}

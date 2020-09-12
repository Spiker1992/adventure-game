<?php

namespace AdventureGame\Item\Providers;

use AdventureGame\Common\Providers\BaseProvider;

class ItemProvider extends BaseProvider
{
    public function __construct($app)
    {
        parent::__construct($app);

        $this->moduleSourceDirectory = dirname(__DIR__);
    }
}

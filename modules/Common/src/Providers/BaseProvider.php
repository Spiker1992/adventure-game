<?php

namespace AdventureGame\Common\Providers;

use Illuminate\Support\ServiceProvider;

class BaseProvider extends ServiceProvider
{
    protected string $moduleSourceDirectory;

    public function boot()
    {
        $this->loadMigrationsFrom("{$this->moduleSourceDirectory}/Database/Migrations");
    }
}

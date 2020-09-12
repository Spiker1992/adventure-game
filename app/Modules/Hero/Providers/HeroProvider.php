<?php

namespace App\Modules\Hero\Providers;

use Illuminate\Support\ServiceProvider;

class HeroProvider extends ServiceProvider
{
    protected $moduleSourceDirectory;

    public function __construct($app)
    {
        parent::__construct($app);

        $this->moduleSourceDirectory = dirname(__DIR__);
    }

    public function boot()
    {
        $this->loadMigrationsFrom("{$this->moduleSourceDirectory}/Database/Migrations");
    }
}

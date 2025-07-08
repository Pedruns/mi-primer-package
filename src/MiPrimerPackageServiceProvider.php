<?php

namespace Jpra\MiPrimerPackage;

use Illuminate\Support\ServiceProvider;

class MiPrimerPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Aquí podrías publicar assets, vistas, etc.
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mi-primer-package');
    }

    public function register()
    {
        //
    }
}

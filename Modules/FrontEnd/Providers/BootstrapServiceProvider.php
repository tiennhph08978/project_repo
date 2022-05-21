<?php

namespace Modules\FrontEnd\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\FrontEnd\Contracts\Services\ContactService;
use Modules\FrontEnd\Contracts\Services\ProjectService;
use Modules\FrontEnd\Services\ProjectServiceImpl;
use Modules\FrontEnd\Services\ContactServiceImpl;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ProjectService::class, ProjectServiceImpl::class);
        $this->app->bind(ContactService::class, ContactServiceImpl::class);
    }
}

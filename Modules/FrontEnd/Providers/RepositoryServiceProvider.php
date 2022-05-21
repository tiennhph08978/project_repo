<?php

namespace Modules\FrontEnd\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\FrontEnd\Repositories\Mysql\ContactRepoImpl;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ContactRepository;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ProjectRepository;
use Modules\FrontEnd\Repositories\Mysql\ProjectRepoImpl;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register repositories.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ProjectRepository::class, ProjectRepoImpl::class);
        $this->app->bind(ContactRepository::class, ContactRepoImpl::class);
    }
}

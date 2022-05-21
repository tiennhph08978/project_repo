<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Repositories\Mysql\UserRepository;
use Modules\Admin\Repositories\Mysql\CategoryRepoImpl;
use Modules\Admin\Repositories\Mysql\ProductRepoImpl;
use Modules\Admin\Contracts\Repositories\Mysql\ProjectRepository;
use Modules\Admin\Repositories\Mysql\ProjectRepoImpl;
use Modules\Admin\Repositories\Mysql\UserRepoImpl;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register repositories.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserRepository::class, UserRepoImpl::class);
        $this->app->bind(CategoryRepository::class, CategoryRepoImpl::class);
        $this->app->bind(ProductRepository::class, ProductRepoImpl::class);

        $this->app->bind(ProjectRepository::class, ProjectRepoImpl::class);
    }
}

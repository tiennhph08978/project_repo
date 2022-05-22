<?php

namespace Modules\Admin\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Contracts\Services\CategoryService;
use Modules\Admin\Contracts\Services\ContactService;
use Modules\Admin\Contracts\Services\ProductService;
use Modules\Admin\Contracts\Services\UserService;
use Modules\Admin\Services\CategoryServiceImpl;
use Modules\Admin\Services\ProductServiceImpl;
use Modules\Admin\Services\UserServiceImpl;
use Modules\Admin\Contracts\Services\ProjectService;
use Modules\Admin\Services\ContactServiceImpl;
use Modules\Admin\Services\ProjectServiceImpl;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(CategoryService::class, CategoryServiceImpl::class);
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
        $this->app->bind(ProjectService::class, ProjectServiceImpl::class);
        $this->app->bind(ContactService::class, ContactServiceImpl::class);
    }
}

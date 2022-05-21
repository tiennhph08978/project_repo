<?php

namespace Modules\FrontEnd\Contracts\Repositories\Mysql;

use Illuminate\Database\Eloquent\Collection;

interface ProjectRepository
{
    /**
     * @return Collection
     */
    public function getDataProject(): Collection;
}

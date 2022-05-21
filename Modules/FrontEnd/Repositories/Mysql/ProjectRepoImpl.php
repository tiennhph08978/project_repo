<?php

namespace Modules\FrontEnd\Repositories\Mysql;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ProjectRepository;

class ProjectRepoImpl implements ProjectRepository
{
    /**
     * @return Collection
     */
    public function getDataProject(): Collection
    {
        return Project::query()->get();
        // TODO: Implement getDataProject() method.
    }
}

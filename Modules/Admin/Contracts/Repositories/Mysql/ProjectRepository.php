<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

interface ProjectRepository
{
    /**
     * @return LengthAwarePaginator
     */
    public function getDataProject(): LengthAwarePaginator;

    /**
     * @param Project $project
     * @return Project
     */
    public function storeAndUpdateProject(Project $project): Project;

    /**
     * @param int $id
     * @return Project|null
     */
    public function getByIdProject(int $id): ?Project;

    /**
     * @param int $id
     * @return void
     */
    public function deleteIdProject(int $id): void;
}

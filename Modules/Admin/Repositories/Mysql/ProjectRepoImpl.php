<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Contracts\Repositories\Mysql\ProjectRepository;

class ProjectRepoImpl implements ProjectRepository
{
    /**
     * @return LengthAwarePaginator
     */
    public function getDataProject(): LengthAwarePaginator
    {
        return Project::query()->paginate();
        // TODO: Implement getDataProject() method.
    }

    /**
     * @param Project $project
     * @return Project
     */
    public function storeAndUpdateProject(Project $project): Project
    {
        $project->save();

        return $project;
        // TODO: Implement storeAndUpdateProject() method.
    }

    /**
     * @param int $id
     * @return Project|null
     */
    public function getByIdProject(int $id): ?Project
    {
        return Project::findOrFail($id);
        // TODO: Implement getByIdProject() method.
    }

    public function deleteIdProject(int $id): void
    {
        Project::destroy($id);
        // TODO: Implement deleteIdProject() method.
    }
}

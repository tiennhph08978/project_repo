<?php

namespace Modules\Admin\Contracts\Services;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

interface ProjectService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getDataProject(): LengthAwarePaginator;

    /**
     * @param ProjectRequest $request
     * @return Project
     */
    public function storeProject(ProjectRequest $request): Project;

    /**
     * @param int $id
     * @return Project|null
     */
    public function getByIdProject(int $id): ?Project;

    /**
     * @param ProjectRequest $request
     * @param int $id
     * @return Project|null
     */
    public function updateDataProject(ProjectRequest $request, int $id): ?Project;

    /**
     * @param int $id
     * @return void
     */
    public function deleteIdProject(int $id): void;
}

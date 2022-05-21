<?php

namespace Modules\Admin\Services;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Contracts\Repositories\Mysql\ProjectRepository;
use Modules\Admin\Contracts\Services\ProjectService;

class ProjectServiceImpl implements ProjectService
{

    protected ProjectRepository $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getDataProject(): LengthAwarePaginator
    {
        return $this->projectRepository->getDataProject();
        // TODO: Implement getDataProject() method.
    }

    public function storeProject(ProjectRequest $request): Project
    {
        if ($request->has('image'))
        {
            $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
        }
        $project = new Project;
        $project->name = $request->get('name');
        $project->image = $filePath;

        return $this->projectRepository->storeAndUpdateProject($project);
        // TODO: Implement storeProject() method.
    }

    public function getByIdProject(int $id): ?Project
    {
        return $this->projectRepository->getByIdProject($id);
        // TODO: Implement getByIdProject() method.
    }

    public function updateDataProject(ProjectRequest $request, int $id): ?Project
    {
        $project = $this->projectRepository->getByIdProject($id);
        if ($request->has('image'))
        {
            if(Storage::exists('upload/'.$project)){
                Storage::delete('upload/'.$project);
            }
            $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
        }
        $project->name = $request->get('name');
        $project->image = $filePath;

        return $this->projectRepository->storeAndUpdateProject($project);
        // TODO: Implement updateDataProject() method.
    }

    public function deleteIdProject(int $id): void
    {
        $this->projectRepository->deleteIdProject($id);
        // TODO: Implement deleteIdProject() method.
    }
}

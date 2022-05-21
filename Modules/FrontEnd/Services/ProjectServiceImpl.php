<?php

namespace Modules\FrontEnd\Services;

use Illuminate\Database\Eloquent\Collection;
use Modules\FrontEnd\Contracts\Repositories\Mysql\ProjectRepository;
use Modules\FrontEnd\Contracts\Services\ProjectService;

class ProjectServiceImpl  implements ProjectService
{
    protected ProjectRepository $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @return Collection
     */
    public function getDataProject(): Collection
    {
        return $this->projectRepository->getDataProject();
        // TODO: Implement getDataProject() method.
    }
}

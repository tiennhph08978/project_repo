<?php

namespace Modules\FrontEnd\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\FrontEnd\Contracts\Services\ProjectService;

class ProjectController extends Controller
{
    protected ProjectService $projectService;
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $projects = $this->projectService->getDataProject();
        return view('frontend::project', compact('projects'));
    }
}

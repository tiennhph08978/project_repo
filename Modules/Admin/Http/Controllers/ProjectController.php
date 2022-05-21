<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\ProjectService;

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
        return view('admin::projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('admin::projects.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ProjectRequest $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request): RedirectResponse
    {
        $this->projectService->storeProject($request);

        return redirect()->route('projects.index')->with('success', 'Add success');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(int $id): Renderable
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(int $id): Renderable
    {
        $project = $this->projectService->getByIdProject($id);

        return view('admin::projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     * @param ProjectRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ProjectRequest $request, int $id): RedirectResponse
    {
        $this->projectService->updateDataProject($request, $id);

        return redirect()->route('projects.index')->with('success', 'Edit success');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->projectService->deleteIdProject($id);

        return redirect()->route('projects.index')->with('success', 'Delete');
    }
}

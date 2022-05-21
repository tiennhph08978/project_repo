<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\CategoryService;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = $this->categoryService->show();
        return view('admin::categories.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('admin::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->categoryService->store($request);
        return redirect()->route('categories.index');

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
        $data = $this->categoryService->edit($id);
        return view('admin::categories.edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param StoreRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(StoreRequest $request, Category $category): RedirectResponse
    {
        $this->categoryService->update($request, $category);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        $this->categoryService->delete($category);
        return redirect()->route('categories.index');
    }
}

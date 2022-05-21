<?php

namespace Modules\Admin\Services;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Services\CategoryService;
use phpDocumentor\Reflection\Types\Void_;

class CategoryServiceImpl implements CategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function store(StoreRequest $request): Category
    {
        $category = new Category();
        $category->name = $request->get('name');
        return $this->categoryRepository->save($category);
    }

    public function delete(Category $category): Void
    {
        $this->categoryRepository->delete($category);
        // TODO: Implement delete() method.
    }

    public function edit(int $id)
    {
        return $this->categoryRepository->findById($id);
        // TODO: Implement edit() method.
    }

    public function show(): Collection
    {
        return $this->categoryRepository->show();
        // TODO: Implement show() method.
    }

    public function update(StoreRequest $request, Category $category): Category
    {
        $category->name = $request ->name;
        return $this->categoryRepository->update($category);
        // TODO: Implement update() method.
    }
}

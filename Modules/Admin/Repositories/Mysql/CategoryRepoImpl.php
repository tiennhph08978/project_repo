<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;

class CategoryRepoImpl implements CategoryRepository
{
    /**
     * Show Category
     * @return Collection
     */

    public function show(): Collection
    {
        return Category::all();
        // TODO: Implement show() method.
    }

    /**
     * Show Category
     * @param Category $category
     * @return Category
     */

    public function save(Category $category): Category
    {
        $category->save();
        return  $category;
        // TODO: Implement save() method.
    }

    /**
     * Find Category
     * @param int $id
     * @return Model|null
     */

    public function findById(int $id): ?Model
    {
        return Category::query()->find($id);
        // TODO: Implement findById() method.
    }

    /**
     * Update Category
     * @param Category $category
     * @return Category
     */

    public function update(Category $category): Category
    {
        $category->update();
        return $category;
        // TODO: Implement update() method.
    }

    /**
     * Delete
     * @param Category $category
     * @return Void
     */

    public function delete(Category $category): Void
    {
        $category->delete();
        // TODO: Implement delete() method.
    }
}

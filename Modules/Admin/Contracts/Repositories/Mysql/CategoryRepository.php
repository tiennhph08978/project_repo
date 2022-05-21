<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

interface CategoryRepository
{
    /**
     * Show Categories
     * @return Collection
     */
    public function show(): Collection;

    /**
     * Save User
     *
     * @param Category $category
     * @return Category
     */
    public function save(Category $category): Category;


    /**
     * Get User by id
     *
     * @param int $id
     * @return Category|null
     */

    public function findById(int $id): ?Model;

    /**
     * Update User
     *
     * @param Category $category
     * @return Category
     */

    public function update(Category $category): Category;

    /**
     * Delete User
     *
     * @param Category $category
     * @return Void
     */

    public function delete(Category $category): Void;


}

<?php

namespace Modules\Admin\Contracts\Services;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryService
{
    public function store(StoreRequest $request);

    public function delete(Category $category): Void;

    public function edit(int $id);

    public function show(): Collection;

    public function update(StoreRequest $request, Category $category);
}

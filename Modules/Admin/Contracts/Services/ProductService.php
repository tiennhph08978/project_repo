<?php

namespace Modules\Admin\Contracts\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;

interface ProductService
{
    public function store(ProductRequest $request): Product;

    public function delete(Product $product): Void;

    public function edit(int $id): Product;

    public function show(): Collection;

    public function update(ProductRequest $request, Product $product): RedirectResponse;

    public function getCategory();
}

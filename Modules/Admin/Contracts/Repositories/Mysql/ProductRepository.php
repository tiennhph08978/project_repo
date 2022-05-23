<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

interface ProductRepository
{
    /**
     * Show Products
     * @return Collection
     */
    public function show(): Collection;

    /**
     * Save Product
     *
     * @param Product $product
     * @return Product
     */
    public function save(Product $product): Product;


    /**
     * Get Product by id
     *
     * @param int $id
     * @return Product|null
     */

    public function findById(int $id): ?Model;

    /**
     * Update Product
     *
     * @param Product $product
     * @return Void
     */

    public function update(Product $product): Void;

    /**
     * Delete Product
     *
     * @param Product $product
     * @return Void
     */

    public function delete(Product $product): Void;

    public function getCategory();
}

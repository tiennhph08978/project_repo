<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;

class ProductRepoImpl implements ProductRepository
{
    /**
     * Show Product
     * @return Collection
     */

    public function show(): Collection
    {
        return Product::all();
        // TODO: Implement show() method.
    }

    /**
     * Save Product
     *
     * @param Product $product
     * @return Product
     */

    public function save(Product $product): Product
    {
        $product->save();
        return  $product;
        // TODO: Implement save() method.
    }

    /**
     * Get Product by id
     *
     * @param int $id
     * @return Product|null
     */

    public function findById(int $id): ?Model
    {
        return Product::query()->find($id);
        // TODO: Implement findById() method.
    }

    /**
     * Update Product
     *
     * @param Product $product
     * @return void
     */

    public function update(Product $product): Void
    {
        $product->update();
        // TODO: Implement update() method.
    }

    /**
     * Delete Product
     *
     * @param Product $product
     * @return Void
     */

    public function delete(Product $product): Void
    {
        $product->delete();
    }

    public function getCategory()
    {
        return Category::query()->get();
    }
}

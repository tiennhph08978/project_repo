<?php

namespace Modules\Admin\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Services\ProductService;
use phpDocumentor\Reflection\Types\Void_;

class ProductServiceImpl implements ProductService
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function store(ProductRequest $request): Product
    {
        // dd($request->input('categories'));
        if ($request->has('image'))
        {
            $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
        }
        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->image = $filePath;

        $this->productRepository->save($product);

        $product->categories()->attach($request->input('categories'));
        // TODO: Implement store() method.
    }

    public function delete(Product $product): Void
    {
        $this->productRepository->delete($product);
        // TODO: Implement delete() method.
    }

    public function edit(int $id): Product
    {
        return $this->productRepository->findById($id);
        // TODO: Implement edit() method.
    }

    public function show(): Collection
    {
        return $this->productRepository->show();
        // TODO: Implement show() method.
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->status = $request->get('status');
        $product->image = $filePath;

        $this->productRepository->update($product);

        return redirect()->route('products.index');

        // TODO: Implement update() method.
    }

    public function getCategory()
    {
        return $this->productRepository->getCategory();
    }
}

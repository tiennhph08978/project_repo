<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\Services\ProductService;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = $this->productService->show();
        return view('admin::products.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('admin::products.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $this->productService->store($request);
        return redirect()->route('admin::products.index');
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
        $data = $this->productService->edit($id);
        return view('admin::products.edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $this->productService->update($request, $product);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $this->productService->delete($product);
        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $products = $this->productService->getAll();
        return ApiResponse::success($products, 'Oke', 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = $this->productService->create($data);
        return ApiResponse::success($product, 'Oke', 200);
    }

    public function show()
    {

    }
}

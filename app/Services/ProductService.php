<?php

namespace App\Services;

use App\Repository\Inteface\ProductRepositoryInterface;
use App\Services\Interface\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function find($id)
    {
        return $this->productRepository->find($id);
    }

    public function create(array $data)
    {
        return $this->productRepository->create($data);
    }
}

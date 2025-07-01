<?php

namespace App\Repository;

use App\Models\Product;
use App\Repository\Inteface\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAll()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

//    public function update($id, array $Data)
//    {
//        // TODO: Implement update() method.
//    }
//
//    public function delete($id)
//    {
//        // TODO: Implement delete() method.
//    }
}

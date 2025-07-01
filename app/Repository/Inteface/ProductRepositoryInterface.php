<?php

namespace App\Repository\Inteface;

interface ProductRepositoryInterface
{
    public function getAll();
    public function find($id);
    public function create(array $data);
//    public function update($id, array $Data);
//    public function delete($id);

}

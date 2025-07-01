<?php

namespace App\Services\Interface;

interface ProductServiceInterface
{
    public function getAll();
    public function find($id);

    public function create(array $data);
}

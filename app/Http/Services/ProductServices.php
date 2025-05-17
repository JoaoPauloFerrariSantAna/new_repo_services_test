<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected ProductRepository $repository;

    public function __construct(ProductRepository $repository) { $this->repository = $repository; }

    public function get()                           { return $this->repository->get(); }
    public function details(int $id)                { return $this->repository->details($id); }
    public function store(array $data)              { return $this->repository->store($data); }
    public function delete(int $id)                 { return $this->repository->delete($id); }
    public function update(array $data, int $id)    { return $this->repository->update($data, $id); }
}
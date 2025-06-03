<?php

namespace src\Service\Products;

use src\Infrastructure\Repository\Products\ProductsRepository;

final readonly class ProductsDeleteService{

    private ProductsRepository $repository;

    public function __construct(){
        $this->repository= new ProductsRepository();
    }

    public function productsDelete(int $id){
        $this->repository->productsDelete($id);
    }
}
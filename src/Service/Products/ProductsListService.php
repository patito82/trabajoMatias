<?php


namespace src\Service\Products;

use src\Infrastructure\Repository\Products\ProductsRepository;

final readonly class ProductsListService{

    private ProductsRepository $repository;

    public function __construct(){
        $this->repository = new ProductsRepository();
    }

    public function listProducts():array{
        return $this->repository->listProducts();
    }
}
<?php

namespace src\Service\Products;
use src\Entity\Products\Products;
use src\Infrastructure\Repository\Products\ProductsRepository;
final readonly class ProductsFinderService{

    private ProductsRepository $repository;
    public function __construct(){
        $this->repository = new ProductsRepository();
    }

    public function findProduct(int $id):Products{
        return $this->repository->findProduct($id);
    }
}
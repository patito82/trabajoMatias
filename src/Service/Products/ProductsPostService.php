<?php

namespace src\Service\Products;

use src\Infrastructure\Repository\Products\ProductsRepository;
use src\Entity\Products\Products;

final readonly class ProductsPostService{

    private ProductsRepository $repository;

    public function __construct(){
        $this->repository = new ProductsRepository();
    }


    public function ProductsPost(string $name, int $price, int $id_factory){

        $product = Products::Create($name, $price, $id_factory);

        $this->repository->ProductsPost($product);
    }
}
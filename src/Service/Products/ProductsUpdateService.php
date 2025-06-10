<?php


namespace src\Service\Products;

use src\Infrastructure\Repository\Products\ProductsRepository;

final readonly class ProductsUpdateService{

    private ProductsRepository $repository;

    public function __construct(){
        $this->repository = new ProductsRepository();
    }

    public function productsUpdate(int $id, string $name, int $price, int $id_factory){
        $product = $this->repository->findProduct($id);
        $product->modify($name, $price, $id_factory);
        $this->repository->productsUpdate($product);
    }
}
<?php

namespace src\Infrastructure\Repository\Products;
use src\Entity\Products\Products;
Interface ProductsInterfaceRepository{
    public function findProduct(int $id):?Products;

    public function listProducts():array;

    public function ProductsPost(Products $product);

    public function productsUpdate(int $id, string $name, int $price, int $id_factory);

    public function productsDelete(int $id);

}
<?php

namespace src\Infrastructure\Repository\Products;
use src\Entity\Products\Products;
Interface ProductsInterfaceRepository{
    public function findProduct(int $id):Products;

    public function listProducts():array;

}
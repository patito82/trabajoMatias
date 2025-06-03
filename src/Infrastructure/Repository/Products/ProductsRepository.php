<?php

namespace src\Infrastructure\Repository\Products;
use src\Infrastructure\Repository\Products\ProductsInterfaceRepository;
use src\Infrastructure\PDO\PDOManager;
use src\Entity\Products\Products;
final readonly class ProductsRepository extends PDOManager implements ProductsInterfaceRepository{

    public function findProduct(int $id):Products{

        $query = "select * from Products where id = :id ";
        $parameters = [
            'id' => $id
        ];

        $productPrimitive= $this->execute($query, $parameters);
        $product = $this->toPrimitiveToProducts($productPrimitive[0]);

        return $product;

    }

    public function listProducts():array{
        $arr = [];

        $query = "select * from Products";

        $products = $this->execute($query);

        foreach($products as $product){
            $arr[] = $this->toPrimitiveToProducts($product);
        }

        return $arr;
    }

    public function toPrimitiveToProducts(?array $products):?Products{
        if($products === null){
            return null;
        }
        return new Products(
            $products['id'],
            $products['name'],
            $products['price'],
            $products['id_factory']
        );
    }
}
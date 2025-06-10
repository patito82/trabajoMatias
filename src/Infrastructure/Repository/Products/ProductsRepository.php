<?php

namespace src\Infrastructure\Repository\Products;
use src\Infrastructure\Repository\Products\ProductsInterfaceRepository;
use src\Infrastructure\PDO\PDOManager;
use src\Entity\Products\Products;
final readonly class ProductsRepository extends PDOManager implements ProductsInterfaceRepository{

    public function findProduct(int $id):?Products{

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


    public function ProductsPost(Products $product){
        $query = "insert into Products(name, price, id_factory)
                    values(:name, :price, :id_factory)";

        $parameters = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'id_factory' => $product->getId_Factory()
            ];
        $this->execute($query, $parameters);


    }

    public function productsUpdate(Products $product){
        $query = "update Products set name= :name, 
            price = :price, 
            id_factory = :id_factory
                where id=:id";

        $parameters = [
            "id" => $product->getId(),
            "name"=> $product->getName(),
            "price" => $product->getPrice(),
            "id_factory" => $product->getId_Factory()
        ];

        $this->execute($query, $parameters);

    }

    public function productsDelete(int $id){
        $query = "delete from products
                    where id=:id";
        $parameters = [
            "id" => $id
        ];

        $this->execute($query, $parameters);

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
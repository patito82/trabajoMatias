<?php

namespace src\Infrastructure\Repository\Category;

use src\Infrastructure\PDO\PDOManager;
use src\Infrastructure\Repository\Category\CategoryRepositoryInterface;
use src\Entity\Category\Category;

final readonly class CategoryRepository extends PDOManager implements CategoryRepositoryInterface{

    public function find(int $id):?Category{
        $query = "select * from Category where id = :id";

        $parameters = [
            "id" => $id
        ];

        $result = $this->execute($query,$parameters);
      
        return $this->primitiveToCategory(null ?? $result[0]);

    }

    public function findersProducts():? array{
        $query = "select * from Category";
            
        $product = $this->execute($query);
        $products = [];   
        foreach($product as $productOk){
            $products[] = $this->primitiveToCategory($productOk);    
        }

        return $products;

    }

    public function primitiveToCategory(?array $category){

        if($category === null){
            "llegue null";
            return null;
        }
        return new Category(
            $category["id"],
            $category["name"],
            $category["code"],
        );
    }
}
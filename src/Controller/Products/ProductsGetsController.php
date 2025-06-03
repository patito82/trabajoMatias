<?php

use src\Service\Products\ProductsListService;
final readonly class ProductsGetsController{

    private ProductsListService $service;

    public function __construct(){
        $this->service = new ProductsListService();
    }

    public function start(){

        $products = $this->service->listProducts();
        foreach($products as $product){
        echo json_encode( 
            [
                    "id" => $product->getId(),
                    "name" => $product->getName(),
                    "price" => $product->getPrice(),
                    "id_factory" => $product->getId_Factory()        
            ]
        );
        }
    }


}
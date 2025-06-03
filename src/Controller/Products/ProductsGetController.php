<?php

use src\Service\Products\ProductsFinderService;
final readonly class ProductsGetController{

    private ProductsFinderService $service;

    public function __construct(){
        $this->service = new ProductsFinderService();
    }

    public function start(int $id){
        
           $product = $this->service->findProduct($id);
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
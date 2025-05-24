<?php

use src\Service\Category\CategoryFinderService;
use src\Entity\Category;
final readonly class CategoryGetController{
     private CategoryFinderService $service;

    public function __construct(){
            $this->service = new CategoryFinderService();
        }


    public function start(int $id):void{
        echo "llega";
        $category = $this->service->find($id);

        echo json_encode(
            [
               "id" => $category->getId(),
               "name" =>$category->getName(),
            ],
            true
        );

        
    }
}
<?php

use src\Service\Category\CategoriesFindersService;
final readonly class CategoriesGetController{
    
    public function __construct(
        private CategoriesFindersService $service = new CategoriesFindersService()
    ){}

    public function start(){
        echo "llega";

        $listProducts = $this->service->findersProducts();

        foreach($listProducts as $list){
            json_encode(
                [
                    'id' => $list->getId(),
                    'name' => $list->getName(),
                ],true
                );
        }
    }

}
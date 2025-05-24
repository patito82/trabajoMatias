<?php

use src\Service\Articles\ArticlesFinderService;
final readonly class ArticlesGetController{

    private ArticlesFinderService $service;

    public function __construct(){
        $this->service = new ArticlesFinderService();
    }

    public function start(int $id){
        
        $articles = $this->service-> ArticlesFind($id);

        echo json_encode(
            [
                "id" => $articles->getId(),
                "category" =>$articles->getCategory_id()
            ]
            );

    }
}

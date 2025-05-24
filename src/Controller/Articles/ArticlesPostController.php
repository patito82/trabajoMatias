<?php

use src\Service\Articles\ArticlesPostService;
use src\Utils\ControllerUtils;

final readonly class ArticlesPostController{

    private ArticlesPostService $service;

    public function __construct(){
        $this->service = new ArticlesPostService();
    }


    public function start(){

        $category_id = ControllerUtils::getPost("category_id");
        $description = ControllerUtils::getPost("description");
        $title = ControllerUtils::getPost("title");
        $image = ControllerUtils::getPost("image");

        $this->service->articlesPost($category_id, $description, $title, $image);
    }
}
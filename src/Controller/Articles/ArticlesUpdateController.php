<?php

use src\Service\Articles\ArticlesUpdateService;
use src\Utils\ControllerUtils;

final readonly class ArticlesUpdateController{

    private ArticlesUpdateService $service;

    public function __construct(){

        $this->service = new ArticlesUpdateService();
    }

    public function start(){

        $id = ControllerUtils::getPost('id');
        $category_id = ControllerUtils::getPost('category_id');
        $description = ControllerUtils::getPost('description');
        $title = ControllerUtils::getPost('title');
        $image = ControllerUtils::getPost('image');

        $this->service->ArticlesUpdate($id, $category_id, $description, $title, $image);

    }
}


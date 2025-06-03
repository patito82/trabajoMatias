<?php

use src\Service\Articles\ArticlesDeleteService;
use Src\Utils\ControllerUtils;
final readonly class ArticlesDeleteController{

    private ArticlesDeleteService $service;

    public function __construct(){
        $this->service = new ArticlesDeleteService();
    }

    public function start(){
        $id = ControllerUtils::getPost("id");
        $this->service->ArticlesDelete($id);
    }
}
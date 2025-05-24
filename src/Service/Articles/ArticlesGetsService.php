<?php

namespace src\Service\Articles;

use src\Infrastructure\Repository\Articles\ArticlesRepository;

final readonly class ArticlesGetsService{

    private ArticlesRepository $repository;

    public function __construct(){
        $this->repository = new ArticlesRepository();
    }

    public function ArticlesGets():array{
        $array=[];
        $array[] = $this->repository->ArticlesGets();
        return $array;
    }
}
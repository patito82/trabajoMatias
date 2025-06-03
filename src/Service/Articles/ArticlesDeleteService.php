<?php


namespace src\Service\Articles;

use src\Infrastructure\Repository\Articles\ArticlesRepository;

final readonly class ArticlesDeleteService{
    private ArticlesRepository $repository;

    public function __construct(){
        $this->repository = new ArticlesRepository();
    }

    public function ArticlesDelete(int $id){
        $this->repository->ArticlesDelete($id);
    }
}